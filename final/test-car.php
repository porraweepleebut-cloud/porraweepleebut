<?php

$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passenger_name = $_POST['passenger_name'] ?? '';
    $distance = (float)($_POST['distance'] ?? 0);
    if ($distance >= 1 && $distance <= 10) { $fare = 15; }
    elseif ($distance >= 11 && $distance <= 20) { $fare = 25; }
    elseif ($distance > 20) { $fare = 35; }
    else { $fare = 0; }
    $done = true;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณค่าโดยสารตามระยะทาง</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณค่าโดยสารตามระยะทาง</h1>
<hr>
<form method="post" class="card">
    <label for="passenger_name">ชื่อผู้โดยสาร</label>
    <input type="text" id="passenger_name" name="passenger_name" placeholder="กรอกชื่อผู้โดยสาร" required value="<?= htmlspecialchars($_POST['passenger_name'] ?? '') ?>">
    <label for="distance">ระยะทาง (กิโลเมตร)</label>
    <input type="number" id="distance" name="distance" step="any" placeholder="เช่น 12" required value="<?= htmlspecialchars($_POST['distance'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณค่าโดยสาร</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ชื่อผู้โดยสาร</span><b><?= htmlspecialchars($passenger_name) ?></b></div>
    <div class="row"><span>ระยะทาง</span><b><?= $distance . " กิโลเมตร" ?></b></div>
    <div class="row"><span>ค่าโดยสารที่ต้องชำระ</span><b><?= $fare . " บาท" ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
