<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $lang = "ru";
        $day = 5;

        if($lang == "ru"){
            switch($day){
                case 1:
                    echo "Понедельник". '<br>';
                    break;
                case 2:
                    echo "Вторник". '<br>';
                    break;
                case 3:
                    echo "Среда". '<br>';
                    break;
                case 4:
                    echo "Четверг". '<br>';
                    break;
                case 5:
                    echo "Пятница". '<br>';
                    break;
                case 6:
                    echo "Суббота". '<br>';
                    break;
                case 7:
                    echo "Воскресенье". '<br>';
                    break;
            }
        }
        else{
            switch($day){
                case 1:
                    echo "Monady". '<br>';
                    break;
                case 2:
                    echo "Tuesday". '<br>';
                    break;
                case 3:
                    echo "Wednesday". '<br>';
                    break;
                case 4:
                    echo "Thursday". '<br>';
                    break;
                case 5:
                    echo "Friday". '<br>';
                    break;
                case 6:
                    echo "Saturday". '<br>';
                    break;
                case 7:
                    echo "Sunday". '<br>';
                    break;
                }
        }


?>
</body>
</html>