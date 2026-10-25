<?php
function calculateGrade($score) {
    if ($score < 0 || $score > 100) return "Invalid";
    if ($score >= 80) return "A";
    elseif ($score >= 70) return "B";
    elseif ($score >= 60) return "C";
    elseif ($score >= 50) return "D";
    else return "F";
}
$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = (float)($_POST['score'] ?? -1);
    $grade = calculateGrade($score);
    if ($grade === 'Invalid') { $err = 'คะแนนต้องอยู่ระหว่าง 0 - 100'; } else { $done = true; }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณเกรด (Grade Calculator)</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณเกรด (Grade Calculator)</h1>
<hr>
<form method="post" class="card">
    <label for="score">คะแนน (0 - 100)</label>
    <input type="number" id="score" name="score" step="any" placeholder="เช่น 75" required value="<?= htmlspecialchars($_POST['score'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณเกรด</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>คะแนน</span><b><?= $score ?></b></div>
    <div class="row"><span>เกรด</span><b><?= $grade ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
