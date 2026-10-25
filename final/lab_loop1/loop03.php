<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Loop 3 : เลขคี่ / เลขคู่ (For)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Loop 3 : เลขคี่ / เลขคู่ (For)</h1>
<hr>
<h3>
        3. ถ้าเลขคี่ ให้แสดงชื่อนักศึกษา เลขคู่แสดง มหาวิทยาลัยเทคโนโลยีราชมงคลลำปาง
    </h3>
    <table>
        <tr>
            <td>ลำดับ</td>
            <td>ข้อมูล</td>
        </tr>
        <?php
        $name = "ปรวีร์";
        $university = "มหาวิทยาลัยเทคโนโลยีราชมงคลลำปาง";

        for ($i = 1; $i <= 100; $i++) {
        ?>
            <?php
            if ($i % 2 == 1) {
            ?>
                <tr>
                    <td class="number">
                        <?php echo $i; ?>
                    </td>

                    <td>
                        <?php echo $name; ?>
                    </td>
                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <td class="number">
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $university; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        <?php
        }
        ?>
    </table>
</div>
</body>
</html>
