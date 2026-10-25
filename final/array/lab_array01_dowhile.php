<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array : Do-while Loop</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Array : Do-while Loop</h1>
<hr>
<h3>โจทย์ do while</h3>
    <pre>
      array : ต้องใช้ร่วมกับคำสั่งวนรอบ
      $number = [10, 20, 30, 40, 50]; => 10+20+30+40+50 = 150
      number[4] = 50
      number[3] = 40
      number[2] = 30
      number[1] = 20
      number[0] = 10
    </pre>
    <hr>

    <?php
    $number = [10, 20, 30, 40, 50];
    $sum = 0;
    $i = count($number) - 1;

    do {
        echo "number[$i] => " . $number[$i] . "<br>";
        $sum = $sum + $number[$i];
        $i--;
    } while ($i >= 0);

    echo "ผลรวม = " . $sum;
    ?>
</div>
</body>
</html>
