<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>งานที่2 อภิชาติ ชินรัตน์ BIT.2/4 เลขที่ 44</title>
    <style>
        /* คุมโทนพื้นหลังมืดสนิท */
        body { 
            font-family: sans-serif; 
            text-align: center; 
            background: #121212; 
            color: #b3b3b3; 
            padding: 20px; 
        }
        /* กรอบกล่องหม่นหมองสีเทาเข้ม */
        .box { 
            background: #1e1e1e; 
            padding: 25px; 
            display: inline-block; 
            border-radius: 8px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.5); 
            border: 1px solid #333;
        }
        h1, h2 { color: #e0e0e0; }
        a { color: #888; text-decoration: none; }
        a:hover { color: #ff5555; }
        
        /* ฟอร์มและปุ่มกดดาร์กๆ */
        input[type="number"] { 
            background: #2a2a2a; 
            color: #fff; 
            border: 1px solid #444; 
            padding: 5px; 
            width: 60px; 
            border-radius: 4px;
        }
        input[type="submit"] { 
            background: #444; 
            color: #fff; 
            border: none; 
            padding: 5px 15px; 
            cursor: pointer; 
            border-radius: 4px;
        }
        input[type="submit"]:hover { background: #555; }

        /* ตกแต่งตารางสูตรคูณโทนสีมืด */
        table { 
            border-collapse: collapse; 
            width: 280px; 
            margin: 20px auto 0 auto; 
            background: #1a1a1a;
        }
        th, td { 
            border: 1px solid #333; 
            padding: 10px; 
            text-align: center; 
        }
        th { 
            background: #2d2d2d; 
            color: #ff5555; /* สีแดงหม่นดุดัน */
        }
        tr:nth-child(even) { background: #222; } /* สลับแถวสีมืด */
        tr:hover td { background: #2a2a2a; color: #fff; } /* ไฮไลท์เมื่อชี้ */
    </style>
</head>
<body>

<div class="box">
    <h1>งานที่2 อภิชาติ ชินรัตน์ BIT.2/4 เลขที่ 44</h1>
    <a href="index.php">ไปหน้าที่1</a><br><br>

    <form action="" method="get">
        <label>กรอกแม่สูตรคูณ :</label>
        <input type="number" name="num" required>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
    if(isset($_GET["num"])){

        $num = (int)$_GET["num"]; 

        echo "<h2>แม่สูตรคูณแม่ $num</h2>";

        echo "<table>";
        echo "<tr>";
        echo "<th>สูตร</th>";
        echo "<th>ผลลัพธ์</th>";
        echo "</tr>";

        $i = 1;
        while($i <= 12){
            echo "<tr>";
            echo "<td>$num × $i</td>";
            echo "<td>" . ($num * $i) . "</td>";
            echo "</tr>";

            $i++;
        }

        echo "</table>";
    }
    ?>
</div>

</body>
</html>