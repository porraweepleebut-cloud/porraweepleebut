<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array : ผลรวม ค่าเฉลี่ย สูงสุด ต่ำสุด</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Array : ผลรวม ค่าเฉลี่ย สูงสุด ต่ำสุด</h1>
<hr>
<h3>โจทย์</h3>
    <pre>
        Array $number = [10, 20, 30, 40, 50]; 
        หาผลรวม ค่าเฉลี่ย สูงสุด และต่ำสุด
    </pre>
    <hr>
    <?php
    $number = [10, 20, 30, 40, 50];
    
    // แสดงข้อมูลใน Array
    echo "ข้อมูลใน Array : ";
    for ($i = 0; $i < count($number); $i++) {
        echo $number[$i] . " ";
    }
    echo "<br><br>";

    // หาค่าต่างๆ ด้วย ฟังก์ชัน built-in
    $sum = array_sum($number);
    $avg = $sum / count($number);
    $max = max($number);
    $min = min($number);

    // แสดงผลลัพธ์
    echo "ผลรวม = " . $sum . "<br>";
    echo "ค่าเฉลี่ย = " . $avg . "<br>";
    echo "ค่าสูงสุด = " . $max . "<br>";
    echo "ค่าต่ำสุด = " . $min . "<br>";
    ?>
</div>
</body>
</html>
