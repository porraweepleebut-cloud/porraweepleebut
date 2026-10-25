<?php

$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $unit = (float)($_POST['unit'] ?? 0);
    if ($unit >= 1 && $unit <= 100) { $rate = 3.50; }
    elseif ($unit >= 101 && $unit <= 300) { $rate = 4.00; }
    elseif ($unit > 300) { $rate = 4.50; }
    else { $rate = 0; }
    $total = $unit * $rate;
    $done = true;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณค่าไฟฟ้า</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณค่าไฟฟ้า</h1>
<hr>
<form method="post" class="card">
    <label for="unit">จำนวนหน่วยไฟที่ใช้</label>
    <input type="number" id="unit" name="unit" step="any" placeholder="เช่น 150" required value="<?= htmlspecialchars($_POST['unit'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณค่าไฟ</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>จำนวนหน่วยไฟ</span><b><?= $unit . " หน่วย" ?></b></div>
    <div class="row"><span>ราคาต่อหน่วย</span><b><?= $rate . " บาท" ?></b></div>
    <div class="row"><span>ค่าไฟที่ต้องชำระ</span><b><?= number_format($total, 2) . " บาท" ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
