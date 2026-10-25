<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 2 : ฟังก์ชันรับพารามิเตอร์</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 2 : ฟังก์ชันรับพารามิเตอร์</h1>
<hr>
<!--เขียนโปรเเกรม php-->
    <?php
        function myMessage(int $x , int $y){
            $fname = "porrawee"; 
            echo "Hello Word! " . $fname;
            echo "<br>";
            echo " $x + $y = " . ($x + $y); 
            echo "<hr>";
        }
    ?>
    <h3>การเรียกใช้</h3>
    <?php
        for ($i = 1; $i <= 50; $i++) {
            myMessage($i, $i);
        }
    ?>
</div>
</body>
</html>
