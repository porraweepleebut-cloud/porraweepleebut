<?php

$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $salary = (float)($_POST['salary'] ?? 0);
    $years = (float)($_POST['years'] ?? 0);
    if ($years < 2) { $bonus_rate = 5; }
    elseif ($years >= 2 && $years <= 5) { $bonus_rate = 10; }
    else { $bonus_rate = 15; }
    $bonus = $salary * $bonus_rate / 100;
    $tax = $bonus * 3 / 100;
    $net_bonus = $bonus - $tax;
    $done = true;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณโบนัสตามอายุงาน</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณโบนัสตามอายุงาน</h1>
<hr>
<form method="post" class="card">
    <label for="name">ชื่อพนักงาน</label>
    <input type="text" id="name" name="name" placeholder="กรอกชื่อพนักงาน" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
    <label for="salary">เงินเดือน (บาท)</label>
    <input type="number" id="salary" name="salary" step="any" placeholder="เช่น 20000" required value="<?= htmlspecialchars($_POST['salary'] ?? '') ?>">
    <label for="years">อายุงาน (ปี)</label>
    <input type="number" id="years" name="years" step="any" placeholder="เช่น 3" required value="<?= htmlspecialchars($_POST['years'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณโบนัส</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ชื่อพนักงาน</span><b><?= htmlspecialchars($name) ?></b></div>
    <div class="row"><span>เงินเดือน</span><b><?= number_format($salary, 2) . " บาท" ?></b></div>
    <div class="row"><span>อายุงาน</span><b><?= $years . " ปี" ?></b></div>
    <div class="row"><span>อัตราโบนัส</span><b><?= $bonus_rate . " %" ?></b></div>
    <div class="row"><span>โบนัสที่ได้รับ</span><b><?= number_format($bonus, 2) . " บาท" ?></b></div>
    <div class="row"><span>ภาษีหัก ณ ที่จ่าย (3%)</span><b><?= number_format($tax, 2) . " บาท" ?></b></div>
    <div class="row"><span>โบนัสสุทธิ</span><b><?= number_format($net_bonus, 2) . " บาท" ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
