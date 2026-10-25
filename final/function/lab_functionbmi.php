<?php
function calculateBMI($weight, $height_cm) {
    $height_m = $height_cm / 100;
    return $weight / ($height_m * $height_m);
}
function interpretBMI($bmi) {
    if ($bmi < 18.50) return "ต่ำกว่าเกณฑ์";
    elseif ($bmi < 23) return "ปกติสมส่วน";
    elseif ($bmi < 25) return "น้ำหนักเกิน";
    elseif ($bmi < 30) return "อ้วนระดับ 1";
    else return "อ้วนอันตราย";
}
$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = (float)($_POST['weight'] ?? 0);
    $height = (float)($_POST['height'] ?? 0);
    if ($weight > 0 && $height > 0) {
        $bmi = calculateBMI($weight, $height);
        $meaning = interpretBMI($bmi);
        $done = true;
    } else {
        $err = 'กรุณากรอกตัวเลขที่มากกว่า 0';
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณดัชนีมวลกาย (BMI)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณดัชนีมวลกาย (BMI)</h1>
<hr>
<form method="post" class="card">
    <label for="weight">น้ำหนัก (กก.)</label>
    <input type="number" id="weight" name="weight" step="any" placeholder="เช่น 60" required value="<?= htmlspecialchars($_POST['weight'] ?? '') ?>">
    <label for="height">ส่วนสูง (ซม.)</label>
    <input type="number" id="height" name="height" step="any" placeholder="เช่น 170" required value="<?= htmlspecialchars($_POST['height'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณ BMI</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ค่า BMI</span><b><?= number_format($bmi, 2) ?></b></div>
    <div class="row"><span>แปลผล</span><b><?= $meaning ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
