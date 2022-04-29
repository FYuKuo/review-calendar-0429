<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0429-月曆複習</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table td {
            border: 1px solid black;
            text-align: center;
        }

        td {
            padding: 8px 16px ;
        }

    </style>
</head>
<body>
    <h2>0429-月曆複習</h2>
    <br>
    <?php
    $month=4;
    $firstDay=date("Y-") . $month . "-1";
    $firstSecond=strtotime($firstDay);
    $firstWeekDay=date("w",$firstSecond);
    $monthDay=date("t",$firstSecond);
    $lastDay=date("Y-") . $month . "-" . $monthDay; 

    echo "月份 ==>" . $month . "<br>";
    echo "第一天 ==>" . $firstDay . "<br>";    
    echo "第一天是星期 ==>" . $firstWeekDay . "<br>";    
    echo "天數 ==>" . $monthDay . "<br>";
    echo "最後一天 ==>" . $lastDay. "<br>";

    echo "<br>";
    

    echo "<table>";
    
    echo "<tr>";
    echo "<td>星期日</td>";
    echo "<td>星期一</td>";
    echo "<td>星期二</td>";
    echo "<td>星期三</td>";
    echo "<td>星期四</td>";
    echo "<td>星期五</td>";
    echo "<td>星期六</td>";
    echo "</tr>";

    for($i=0; $i<6; $i++){
        echo "<tr>";
        
        for($j=0; $j<7; $j++){
            $day=7*$i + ($j - $firstWeekDay);
            
            echo "<td>";
            echo $day;
            echo "</td>";

        }



        echo "</tr>";
    }


    echo "</table>";

    ?>
</body>
</html>