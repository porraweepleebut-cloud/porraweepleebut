<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 3 : กำหนดชนิดข้อมูลและคืนค่า</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 3 : กำหนดชนิดข้อมูลและคืนค่า</h1>
<hr>
<!--เขียนโปรแกรม php-->
    <?php
        function addNumbers(float $a , float $b) : float {
            return $a + $b ;
        }
    ?>
    <h3>การเรียกใช้งาน</h3>
    <?php
        for ($i = 1; $i <= 50; $i++) {
            echo $i . ". " . $i . " + " . $i . " = " . addNumbers($i, $i) . "<br>";
        }
    ?>
</div>
</body>
</html>
