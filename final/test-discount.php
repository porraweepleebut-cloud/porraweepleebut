<?php

$done = false; $err = ''; $cls = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'] ?? '';
    $amount = (float)($_POST['amount'] ?? 0);
    if ($amount < 2000) { $discount_rate = 0; }
    elseif ($amount >= 2000 && $amount <= 5000) { $discount_rate = 5; }
    else { $discount_rate = 10; }
    $discount = $amount * $discount_rate / 100;
    $total = $amount - $discount;
    $done = true;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>คำนวณส่วนลดสินค้า</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="index.html">← กลับหน้าหลัก</a>
<h1 class="title">คำนวณส่วนลดสินค้า</h1>
<hr>
<form method="post" class="card">
    <label for="product_name">ชื่อสินค้า</label>
    <input type="text" id="product_name" name="product_name" placeholder="กรอกชื่อสินค้า" required value="<?= htmlspecialchars($_POST['product_name'] ?? '') ?>">
    <label for="amount">ยอดซื้อสินค้า (บาท)</label>
    <input type="number" id="amount" name="amount" step="any" placeholder="กรอกราคา เช่น 1000" required value="<?= htmlspecialchars($_POST['amount'] ?? '') ?>">
    <button type="submit" class="btn">คำนวณราคาสินค้า</button>
</form>
<?php if ($err): ?>
<div class="result err"><?= $err ?></div>
<?php endif; ?>
<?php if ($done): ?>
<div class="result <?= $cls ?>">
    <h3>ผลลัพธ์</h3>
    <div class="row"><span>ชื่อสินค้า</span><b><?= htmlspecialchars($product_name) ?></b></div>
    <div class="row"><span>ยอดซื้อสินค้า</span><b><?= number_format($amount, 2) . " บาท" ?></b></div>
    <div class="row"><span>อัตราส่วนลด</span><b><?= $discount_rate . " %" ?></b></div>
    <div class="row"><span>จำนวนเงินส่วนลด</span><b><?= number_format($discount, 2) . " บาท" ?></b></div>
    <div class="row"><span>จำนวนเงินที่ต้องชำระ</span><b><?= number_format($total, 2) . " บาท" ?></b></div>
</div>
<?php endif; ?>
</div>
</body>
</html>
