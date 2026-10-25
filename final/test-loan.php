<?php
function evaluateLoan($age, $income, $expense, $loan, $months, $late) {
    if ($months <= 0) return "Invalid loan period";
    $balance = $income - $expense;
    $payment = $loan / $months;
    if ($age >= 20 && $age <= 60 && $income >= 15000 && $late == "no" && $balance >= 2 * $payment && $loan <= 20 * $income) {
        return "Loan Approved";
    }
    return "Loan Not Approved";
}
$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = evaluateLoan((float)$_POST['age'], (float)$_POST['income'], (float)$_POST['expense'], (float)$_POST['loan'], (float)$_POST['months'], $_POST['late'] ?? 'no');
    $done = true;
    $cls = ($result === 'Loan Approved') ? 'ok' : 'bad';
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ประเมินสินเชื่อ (Loan Evaluation)</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">ประเมินสินเชื่อ (Loan Evaluation)</h1>
<hr>
<form method="post" class="card">
    <label for="age">อายุ (ปี)</label>
    <input type="number" id="age" name="age" step="any" placeholder="เช่น 30" required value="<?= htmlspecialchars($_POST['age'] ?? '') ?>">
    <label for="income">รายได้ต่อเดือน (บาท)</label>
    <input type="number" id="income" name="income" step="any" placeholder="เช่น 25000" required value="<?= htmlspecialchars($_POST['income'] ?? '') ?>">
    <label for="expense">รายจ่ายต่อเดือน (บาท)</label>
    <input type="number" id="expense" name="expense" step="any" placeholder="เช่น 10000" required value="<?= htmlspecialchars($_POST['expense'] ?? '') ?>">
    <label for="loan">จำนวนเงินกู้ (บาท)</label>
    <input type="number" id="loan" name="loan" step="any" placeholder="เช่น 100000" required value="<?= htmlspecialchars($_POST['loan'] ?? '') ?>">
    <label for="months">ระยะเวลาผ่อน (เดือน)</label>
    <input type="number" id="months" name="months" step="any" placeholder="เช่น 24" required value="<?= htmlspecialchars($_POST['months'] ?? '') ?>">
    <label for="late">เคยผิดนัดชำระหรือไม่</label>
    <select id="late" name="late">
        <option value="no" <?= (($_POST['late'] ?? 'no') === 'no') ? 'selected' : '' ?>>ไม่เคย</option>
        <option value="yes" <?= (($_POST['late'] ?? '') === 'yes') ? 'selected' : '' ?>>เคย</option>
    </select>
    <button type="submit" class="btn">ประเมินสินเชื่อ</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ผลการประเมิน</span><b><?= $result ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
