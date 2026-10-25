<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Loop 5 : ผลรวมและค่าเฉลี่ย (For)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Loop 5 : ผลรวมและค่าเฉลี่ย (For)</h1>
<hr>
<h3>
        5. หาผลรวมและค่าเฉลี่ยเลขคู่ เลขคี่ และทั้งหมด [หารเอาเศษด้วย 2]
    </h3>

    <table>

        <tr>
            <td>ลำดับ</td>
            <td>ข้อมูล</td>
        </tr>

        <?php

        $name = "ปรวีร์ พลีบัตร";
        $university = "มหาวิทยาลัยเทคโนโลยีราชมงคลลำปาง";

        $sumeven = 0;
        $sumodd = 0;
        $sumall = 0;

        $counteven = 0;
        $countodd = 0;
        $countall = 0;

        for ($i = 1; $i <= 100; $i++) {

            $sumall = $sumall + $i;
            $countall++;

            if ($i % 2 == 1) {

                $sumodd = $sumodd + $i;
                $countodd++;

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

                $sumeven = $sumeven + $i;
                $counteven++;

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
        }

        $avgeven = $sumeven / $counteven;
        $avgodd = $sumodd / $countodd;
        $avgall = $sumall / $countall;

        ?>

        <tr>
            <td>ผลรวมเลขคู่</td>
            <td class="number">
                <?php echo $sumeven; ?>
            </td>
        </tr>

        <tr>
            <td>ผลรวมเลขคี่</td>
            <td class="number">
                <?php echo $sumodd; ?>
            </td>
        </tr>

        <tr>
            <td>ผลรวมทั้งหมด</td>
            <td class="number">
                <?php echo $sumall; ?>
            </td>
        </tr>

        <tr>
            <td>ค่าเฉลี่ยเลขคู่</td>
            <td class="number">
                <?php
                echo $sumeven . "/" . $counteven . " = "
                    . number_format($avgeven, 2);
                ?>
            </td>
        </tr>

        <tr>
            <td>ค่าเฉลี่ยเลขคี่</td>
            <td class="number">
                <?php
                echo $sumodd . "/" . $countodd . " = "
                    . number_format($avgodd, 2);
                ?>
            </td>
        </tr>

        <tr>
            <td>ค่าเฉลี่ยทั้งหมด</td>
            <td class="number">
                <?php
                echo $sumall . "/" . $countall . " = "
                    . number_format($avgall, 2);
                ?>
            </td>
        </tr>

    </table>
</div>
</body>
</html>
