<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array : Foreach</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Array : Foreach</h1>
<hr>
<h3>โจทย์</h3>
    <pre>
        array มักใช้ร่วมกับคำสั่งวนรอบ
        $number = [10, 20, 30, 40, 50]; =>10+20+30+40+50 =150
    </pre>
    <hr>
    <?php
    $number = [10, 20, 30, 40, 50]; //=>10+20+30+40+50+ =150
    $sum = 0; $i=0;
    foreach ($number as $value) {
        echo "number[$i] => ". $number[$i] . "<br>";
        $sum = $sum + $value;
        $i++;
    }
    echo "ผลรวม = " . $sum;
    ?>
</div>
</body>
</html>
