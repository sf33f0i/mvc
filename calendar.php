<?php
    setlocale(LC_ALL, 'ru_RU.UTF-8');

    function calc($mount_calc, $year = 2024){
    $wday = date("N", strtotime("1.$mount_calc.$year"));
    $day=1;
    $mount=[];
    for($i = 0; $i<6; $i++){
        $week=[];
        for($x = 1; $x<=7; $x++){
            if($i==0){
                if($x < $wday){
                    $week[] = '';
                }else{
                    $week[] = $day;
                    $day++;
                }
            }else{
            if(!checkdate($mount_calc, $day, 2024)){
                $mount[] = $week;
                break 2;
            }
            $week[] = $day;
            $day++;
            }

        }

        $mount[] = $week;

    }
    return $mount;

    }
    $mes = 1;
    $year = 2024;
    $mount =  calc($mes, $year);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= date('F Y', strtotime("1.$mes.$year")) ?> </h1>
    <table>
        <tr>
            <td>Пн</td>
            <td>Вт</td>
            <td>Ср</td>
            <td>Чт</td>
            <td>Пт</td>
            <td>Сб</td>
            <td>Вс</td>
        </tr>
            <?php foreach($mount as $week): ?>
                <tr>
                <?php foreach($week as $key =>$days): ?>
                    <td style=<?if(date("d m y",strtotime("now")) == date('d m y',strtotime("$days.$mes.$year"))){ echo 'color:blue';}?> ><?= $days?></td>
                <?php endforeach;?>
                </tr>
            <? endforeach;?>
    </table>
</body>
</html>