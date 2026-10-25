<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Function 5 : หลายพารามิเตอร์ (...$x)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Function 5 : หลายพารามิเตอร์ (...$x)</h1>
<hr>
<!--เขียนโปรแกรม php-->
    <?php
        function sumMyNumbers(...$x) {
            $n = 0;
            $lay = count($x);
            for ($i = 0; $i < $lay; $i++) {
                $n = $n + $x[$i];
            }
            return $n;
        }
    ?>
    <h3>การเรียกใช้งาน</h3>
    <?php
        $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
        echo $a;
    ?>
</div>
</body>
</html>
