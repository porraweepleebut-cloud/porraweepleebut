<?php
function calculateBMI($weight, $height) {
    $height = $height / 100;
    return $weight / ($height * $height);
}
function getBMIResult($bmi) {
    if ($bmi < 18.5) return "Underweight";
    elseif ($bmi < 23) return "Normal";
    elseif ($bmi < 25) return "Overweight";
    elseif ($bmi < 30) return "Obese Level 1";
    else return "Obese Level 2";
}
$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = (float)($_POST['weight'] ?? 0);
    $height = (float)($_POST['height'] ?? 0);
    if ($weight > 0 && $height > 0) {
        $bmi = calculateBMI($weight, $height);
        $done = true;
    } else {
        $err = 'ข้อมูลไม่ถูกต้อง (Invalid data)';
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณ BMI (BMI Calculator)</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณ BMI (BMI Calculator)</h1>
<hr>
<form method="post" class="card">
    <label for="weight">น้ำหนัก (กก.)</label>
    <input type="number" id="weight" name="weight" step="any" placeholder="เช่น 60" required value="<?= htmlspecialchars($_POST['weight'] ?? '') ?>">
    <label for="height">ส่วนสูง (ซม.)</label>
    <input type="number" id="height" name="height" step="any" placeholder="เช่น 170" required value="<?= htmlspecialchars($_POST['height'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณ</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>BMI</span><b><?= number_format($bmi, 2) ?></b></div>
    <div class="row"><span>ผลลัพธ์</span><b><?= getBMIResult($bmi) ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
