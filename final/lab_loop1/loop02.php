<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Loop 2 : ตารางชื่อ-นามสกุล (For)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Loop 2 : ตารางชื่อ-นามสกุล (For)</h1>
<hr>
<h3>
        2. ปรับปรุง ใช้ Tag :  html  Table and CSS
    </h3>
    <table>
        <tr>
            <td>ลำดับ</td>
            <td> ชื่อ </td>
            <td> นามสกุล </td>
        </tr>
        <?php
        $name ="ปรวีร์";
        $suname = "พลีบัตร";
        for($i=1; $i<=100; $i++){
        ?>
            <tr>
                <td class="number"><?php echo $i; ?></td>
                <td> <?php echo $name; ?> </td>
                <td> <?php echo $suname; ?> </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</body>
</html>
