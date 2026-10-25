<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 4 : ฟังก์ชันคืนค่า (return)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 4 : ฟังก์ชันคืนค่า (return)</h1>
<hr>
<!--เขียนโปรแกรม php-->
    <?php
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }
    ?>
    <h3>การเรียกใช้งาน</h3>
    <?php
        for ($i = 1; $i <= 50; $i++) {
            echo $i . ". " . $i . " + " . $i . " = " . sum($i, $i) . "<br>";
        }
    ?>
</div>
</body>
</html>
