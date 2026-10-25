<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array : Foreach (ผลรวมและค่าเฉลี่ย)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Array : Foreach (ผลรวมและค่าเฉลี่ย)</h1>
<hr>
<h3>โจทย์</h3>
    <pre>
กำหนด Array เป็น [10, 20, 30, 40, 50]

ผลรวม = 150
ค่าเฉลี่ย = 150 ÷ 5 = 30
    </pre>
    <hr>
    <?php
    $number = [10, 20, 30, 40, 50];
    $sum = 0;
    $i = 0;
    foreach ($number as $value) {
        echo "number[$i] => " . $value . "<br>";
        $sum = $sum + $value;
        $i++;
    }
    $average = $sum / count($number);
    echo "<br>";
    echo "ผลรวม = " . $sum . "<br>";
    echo "ค่าเฉลี่ย = " . $sum . " ÷ " . count($number) . " = " . $average;
    ?>
    <h3>ผู้เขียนโปรเเกรม</h3>
    <?php
    $student = ["id" => "unknow","name" => "ปรวีร์", "age" => 20 ];
    echo "ชื่อนักศึกษา : " .$student["name"] ."<bR>";
    echo "รหัสนักศึกษา : " .$student["id"] ."<bR>";
    echo "อายุนักศึกษา : " .$student["age"] ."<bR>";

    echo "<hr>";
    $student = [
        [ "id" => "unknow","name" => "ปรวีร์","age" => 20 ],
        [ "id" => "unknow","name" => "กิตติพิช,", "age" => 20]
        ];
    echo "รหัสนักศึกษา : ".$student[1]["id"] ."<bR>";
    echo "ชื่อนักศึกษา : " .$student[1]["name"] ."<bR>";
    echo "อายุนักศึกษา : " .$student[1]["age"] ."<bR>";

    echo "<hr>";
    $student = [
        [ "id" => "unknow", "name" => "ปรวีร์", "age" => 20 ],
        [ "id" => "unknow", "name" => "กิตติพิช", "age" => 20 ],
        [ "id" => "unknow", "name" => "ยาณภัทร", "age" => 20 ]
        ];

    echo "รหัสนักศึกษา : " . $student[2]["id"] . "<br>";
    echo "ชื่อนักศึกษา : " . $student[2]["name"] . "<br>";
    echo "อายุนักศึกษา : " . $student[2]["age"] . "<br>";

    ?>
</div>
</body>
</html>
