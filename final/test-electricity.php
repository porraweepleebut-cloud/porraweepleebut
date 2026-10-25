<?php
function calculateElectricity($units) {
    if ($units <= 100) return $units * 2.50;
    elseif ($units <= 200) return (100 * 2.50) + (($units - 100) * 3);
    else return (100 * 2.50) + (100 * 3) + (($units - 200) * 4);
}
function calculateVAT($amount) { return $amount * 0.07; }
$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $units = (float)($_POST['units'] ?? -1);
    if ($units >= 0) {
        $electricity = calculateElectricity($units);
        $service = 38;
        $beforeVAT = $electricity + $service;
        $vat = calculateVAT($beforeVAT);
        $total = $beforeVAT + $vat;
        $done = true;
    } else {
        $err = 'จำนวนหน่วยไม่ถูกต้อง';
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณค่าไฟฟ้า (Electricity Bill)</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณค่าไฟฟ้า (Electricity Bill)</h1>
<hr>
<form method="post" class="card">
    <label for="units">จำนวนหน่วยไฟที่ใช้</label>
    <input type="number" id="units" name="units" step="any" placeholder="เช่น 250" required value="<?= htmlspecialchars($_POST['units'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณค่าไฟ</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ค่าไฟฟ้า</span><b><?= number_format($electricity, 2) . " บาท" ?></b></div>
    <div class="row"><span>ค่าบริการ</span><b><?= number_format($service, 2) . " บาท" ?></b></div>
    <div class="row"><span>ภาษีมูลค่าเพิ่ม (7%)</span><b><?= number_format($vat, 2) . " บาท" ?></b></div>
    <div class="row"><span>รวมทั้งสิ้น</span><b><?= number_format($total, 2) . " บาท" ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
