<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 1 : ฟังก์ชันไม่มีพารามิเตอร์</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 1 : ฟังก์ชันไม่มีพารามิเตอร์</h1>
<hr>
<!--เขียนโปรเเกรม php-->
    <?php
        function myMessage(){
            $fname = "porrawee"; 
            echo "Hello Word! " . $fname . "<br>";
            $x = 10; $y = 5;
            echo " $x + $y = " . ($x + $y); 
            echo "<hr>";
        }
    ?>
    <h3>การเขียนโปรเเกรม </h3>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            myMessage();
        }
    ?>
</div>
</body>
</html>
