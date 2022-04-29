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
            height: 500px;
        }
        table,td,th {
            border: 1px solid black;
            text-align: center;
        }

        td,th {
            padding: 8px 16px ;
            width: 14%;
            height: 14%;
            background-color: #D9EEE3;

        }
        th{
            background-color: white;
        }

        td:hover{
            background-color: #9FE2BF;
            font-size: x-large;
            color: white;
        }

        .weekend {
            background-color: lightpink;
        }
        .weekend:hover {
            background-color: #ffe1e1;
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
    $today=date("Y-m-d");
    $checktoday="";
    

    echo "月份 ==>" . $month . "<br>";
    echo "第一天 ==>" . $firstDay . "<br>";    
    echo "第一天是星期 ==>" . $firstWeekDay . "<br>";    
    echo "天數 ==>" . $monthDay . "<br>";
    echo "最後一天 ==>" . $lastDay. "<br>";

    echo "<br>";
    

    echo "<table>";
    
    echo "<tr>";
    echo "<th>星期日</th>";
    echo "<th>星期一</th>";
    echo "<th>星期二</th>";
    echo "<th>星期三</th>";
    echo "<th>星期四</th>";
    echo "<th>星期五</th>";
    echo "<th>星期六</th>";
    echo "</tr>";

    for($i=0; $i<6; $i++){
        echo "<tr>";
        
        for($j=0; $j<7; $j++){
            $day=7*$i + $j - $firstWeekDay;
            $shiftDay=strtotime("+$day days",$firstSecond);
            $date=date("d",$shiftDay);
            $dateWeek=date("w",$shiftDay);

            if(date("Y-m-d",$shiftDay)==$today){
                $checktoday="today";
            }

            
            
            if($day>=0 && $day<$monthDay ){
                
                if($dateWeek==0 || $dateWeek==6){
                    echo "<td class=weekend>";
                    
                }else{
                    echo "<td class=workday>";
                    
                }
                

                echo $date;
            }else{

                echo "<td>";
            }

            echo "</td>";

        }



        echo "</tr>";
    }


    echo "</table>";

    ?>
</body>
</html>