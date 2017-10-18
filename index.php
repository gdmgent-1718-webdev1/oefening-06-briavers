<?php
 $day = date("d");   
 $month = date("n");

 Echo "today it is :${day} / ${month}".PHP_EOL;

function season ($day, $month){


    if (($month >= 3 && $day >= 21) || $month == 4 || $month ==5 ||($month <= 6 && $day <= 20)){
        return "It is spring";
    }
    elseif (($month >= 6 && $day >= 21) || $month == 7 || $month == 8 ||($month <= 9 && $day <= 20)){
        return "It is summer";
    }elseif (($month >= 9 && $day >= 21) || $month == 10 || $month == 11 ||($month <= 12 && $day <= 20)){
        return "It is autumn";
    }elseif (($month >= 12 && $day >= 21) || $month == 1 || $month == 2 ||($month <= 3 && $day <= 20)){
        return "It is winter";
    }
    }

echo season($day, $month);

