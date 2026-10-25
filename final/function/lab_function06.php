<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 6 : คืนค่าผลรวมและค่าเฉลี่ย</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 6 : คืนค่าผลรวมและค่าเฉลี่ย</h1>
<hr>
<?php
        function calculateMyNumbers(...$x) {
            $sum = 0;
            $len = count($x);
            for ($i = 0; $i < $len; $i++) {
                $sum = $sum + $x[$i];
            }
            // หาค่าเฉลี่ย
            if ($len > 0) {
                $average = $sum / $len;
            } else {
                $average = 0;
            }
            return array(
                "sum" => $sum,
                "average" => $average
            );
        }
    ?>

    <h3>การเรียกใช้งาน</h3>
    <?php
        $result = calculateMyNumbers(10, 20, 30, 40, 50);
        echo "ผลรวม = " . $result["sum"] . "<br>";
        echo "ค่าเฉลี่ย = " . $result["average"];
    ?>
</div>
</body>
</html>
