<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Loop 1 : แสดงชื่อ 100 ครั้ง (For / While / Do-while)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Loop 1 : แสดงชื่อ 100 ครั้ง (For / While / Do-while)</h1>
<hr>
<h3>โจทย์</h3>

<p>แสดงลำดับ ชื่อนักศึกษา จำนวน 100 ครั้ง</p>

<hr>

<h3>1. For Loop</h3>

<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i . ". ปรวีร์ พลีบัตร<br>";
}
?>

<hr>

<h3>2. While Loop</h3>

<?php
$i = 1;

while ($i <= 100) {
    echo $i . ". ปรวีร์ พลีบัตร<br>";
    $i++;
}
?>

<hr>

<h3>3. Do While Loop</h3>

<?php
$i = 1;

do {
    echo $i . ". ปรวีร์ พลีบัตร<br>";
    $i++;
} while ($i <= 100);
?>
</div>
</body>
</html>
