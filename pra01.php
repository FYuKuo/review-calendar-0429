<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0429-月曆複習</title>
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



    
    
    
    
    ?>
</body>
</html>