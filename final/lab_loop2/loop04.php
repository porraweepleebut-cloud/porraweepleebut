<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Loop 4 : ผลรวมเลขคู่ เลขคี่ (While)</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="page">
<a class="back" href="../index.html">← กลับหน้าหลัก</a>
<h1 class="title">Loop 4 : ผลรวมเลขคู่ เลขคี่ (While)</h1>
<hr>
<h3>
        4. หาผลรวมเลขคู่ เลขคี่ และทั้งหมด [หารเอาเศษด้วย 2]
    </h3>

    <table>
        <tr>
            <td>ลำดับ</td>
            <td>ข้อมูล</td>
        </tr>

        <?php
        $name="ปรวีร์ พลีบัตร";
        $university="มหาวิทยาลัยเทคโนโลยีราชมงคลลำปาง";
        $sumeven=0;
        $sumodd=0;
        $sumall=0;

        $i=1;
        while($i<=100){
            $sumall=$sumall+$i;

            if($i%2==1){
                $sumodd=$sumodd+$i;
        ?>
        <tr>
            <td class="number"><?php echo $i;?></td>
            <td><?php echo $name;?></td>
        </tr>
        <?php
            }else{
                $sumeven=$sumeven+$i;
        ?>
        <tr>
            <td class="number"><?php echo $i;?></td>
            <td><?php echo $university;?></td>
        </tr>
        <?php
            }
            $i++;
        }
        ?>

        <tr>
            <td>ผลรวมเลขคู่</td>
            <td class="number"><?php echo $sumeven;?></td>
        </tr>

        <tr>
            <td>ผลรวมเลขคี่</td>
            <td class="number"><?php echo $sumodd;?></td>
        </tr>

        <tr>
            <td>ผลรวมทั้งหมด</td>
            <td class="number"><?php echo $sumall;?></td>
        </tr>
    </table>
</div>
</body>
</html>
