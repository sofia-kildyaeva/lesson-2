<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Занятие 2</title>
</head>
<body>
    <div class="container">
        <h2>Задачи без ветвлений</h2>
        <div class="task">
            <h3>Четное</h3>
            <?php
                $num = 3;
                echo $num % 2 == 0 ? 1 : 0;
            ?>
        </div>
        <div class="task">
            <h3>Ход ладьи</h3>
            <?php
                $x0 = 1;
                $y0 = 3;
                $x1 = 1;
                $y1 = 7;
                echo ($x0 == $x1) || ($y0 == $y1) ? 'True' : 'False';
            ?>
        </div>
        <div class="task">
            <h3>Ход короля</h3>
            <?php
                $x0 = 1;
                $y0 = 1;
                $x1 = 2;
                $y1 = 1;
                echo (($x0 - $x1 <= 1) && ($x0 - $x1 >= -1)) && (($y0 - $y1 <= 1) && ($y0 - $y1 >= -1)) ? 'True' : 'False'
            ?>
        </div>
        
        <h2>Ветвления - if...</h2>
        <div class="task">
            <h3>Гость</h3>
            <?php
                $guest = true;
                if ($guest == true) {
                    echo 'Пожалуйста авторизируйтесь!';
                }
            ?>
        </div>
        <div class="task">
            <h3>Модуль</h3>
            <?php
                $number = 2;
                if ($number < 0) {
                    $number *= -1;
                }
                echo $number;
            ?>
        </div>
        <div class="task">
            <h3>Кто больше</h3>
            <?php
                $number_one = 2;
                $number_two = 3;
                if ($number_one >= $number_two) {
                    echo $number_one;
                }
                if ($number_one < $number_two) {
                    echo $number_two;
                }
            ?> 
        </div>
        
        <h2>if... else</h2>
        <div class="task">
            <h3>Черное и белое</h3>
            <?php
                $number_row = 2;
                $number_colomn = 3;
                if (($number_row + $number_colomn) % 2 == 0) {
                    echo 'Ячейка черного цвета';
                } else {
                    echo 'Ячейка белого цвета';
                }
            ?>
        </div>
        <div class="task">
            <h3>Все четные</h3>
            <?php
                $A = 2;
                $B = 22;
                $C = 6;
                if (($A % 2 == 0) && ($B % 2 == 0) && ($C % 2 == 0)) {
                    echo 'Все числа четные';
                } else {
                    echo 'Не все числа являются четными';
                }
            ?>
        </div>
        <div class="task">
            <h3>Есть ли четные</h3>
            <?php
                $A = 13;
                $B = 9;
                $C = 35;
                if (($A % 2 == 0) || ($B % 2 == 0) || ($C % 2 == 0)) {
                    echo 'Есть четные';
                } else {
                    echo 'Нет четных';
                }
            ?>
        </div>
        <div class="task">
            <h3>Выходной</h3>
            <?php
                $day = 6;
                if ($day == 6 || $day == 5) {
                    echo 'Выходной';
                } else {
                    echo 'Рабочий день';
                }
            ?>
        </div>
        <div class="task">
            <h3>Треугольник</h3>
            <?php
                $segment_one = 1;
                $segment_two = 2;
                $segment_three = 3;
                if (($segment_one + $segment_two) > $segment_three && ($segment_two + $segment_three) > $segment_one && ($segment_one + $segment_three) > $segment_two) {
                    echo 'Треугольник существует';
                } else {
                    echo 'Треугольник НЕ существует';
                }
            ?>
        </div>
        <div class="task">
            <h3>Високосный год</h3>
            <?php
                $year = 1600;
                if (($year % 4 == 0) && ($year % 100 == 0 && $year % 400 == 0)) {
                    echo 'YES';
                } else {
                    echo 'NO';
                }
            ?>
        </div>
        
        <h2>if... elseif... else</h2>
        <div class="task">
            <h3>Знак</h3>
            <?php
                $number_enter = -1;
                if ($number_enter > 0) {
                    echo $number_enter;
                } 
                elseif ($number_enter < 0) {
                    echo -1;
                }
                else {
                    echo 0;
                }
            ?>
        </div>
        <div class="task">
            <h3>Длинная соломинка</h3>
            <?php
                $length_one = 1;
                $length_two = 2;
                $length_three = 5;
                if ($length_one > $length_two && $length_one > $length_three) {
                    echo $length_one;
                }
                elseif ($length_two > $length_one && $length_two > $length_three) {
                    echo $length_two;
                }
                else {
                    echo $length_three;
                }
            ?>
        </div>
        <div class="task">
            <h3>Сегодня холодно</h3>
            <?php
                $t = 15;
                if ($t < -30) {
                    echo "Оставайтесь дома!";
                }
                elseif ($t >= -30 && $t < -10) {
                    echo "Сегодня холодно!";
                }
                elseif ($t >= -10 && $t < 5) {
                    echo "Не холодно!";
                }
                elseif ($t >= 5 && $t < 15) {
                    echo "Тепло!";
                }
                elseif ($t >= 15 && $t < 25) {
                    echo "Очень тепло!";
                }
                elseif ($t >= 25 && $t < 35) {
                    echo "Жарко!";
                }
                else {
                    echo "Пекло!";
                }
            ?>
        </div>

        <h2>Дополнительные задачи</h2>
        <div class="task">
            <h3>Ежедневник</h3>
            <?php
                $h_start_1 = 8;
                $m_start_1 = 3;
                $s_start_1 = 20;
                $h_finish_1 = 10;
                $m_finish_1 = 5;
                $s_finish_1 = 15;

                $h_start_2 = 1;
                $m_start_2 = 10;
                $s_start_2 = 25;
                $h_finish_2 = 7;
                $m_finish_2 = 25;
                $s_finish_2 = 46;

                $sum_start_1 = $s_start_1 + $m_start_1 * 60 + $h_start_1 * 3600;
                $sum_finish_1 = $s_finish_1 + $m_finish_1 * 60 + $h_finish_1 * 3600;
                $sum_start_2 = $s_start_2 + $m_start_2 * 60 + $h_start_2 * 3600;
                $sum_finish_2 = $s_finish_2 + $m_finish_2 * 60 + $h_finish_2 * 3600;

                if (($sum_start_1 > $sum_start_2 && $sum_start_1 < $sum_finish_2) || ($sum_start_2 > $sum_start_1 && $sum_start_2 < $sum_finish_1)) {
                    echo 'True';
                } else {
                    echo 'False';
                }
            ?>
        </div>
        <div class="task">
            <h3>Шоколадка</h3>
            <?php
                $n = 2;
                $m = 4;
                $k_cloves = 2;
                if (($k_cloves < ($n * $m)) && (($k_cloves % $n == 0) || ($k_cloves % $m == 0))) {
                    echo 'Можно отломить';
                }
                else {
                    echo 'Нельзя отломить';
                }
            ?>
        </div>
        <div class="task">
            <h3>Выходной 2</h3>
            <?php
                $n_day_week = 4;
                $k_day_delivery = 7;
                $delivery_day = ($k_day_delivery % 7) + $n_day_week;
                if ($delivery_day == 5 || $delivery_day == 6) {
                    $delivery_day = 0;
                } else {
                    $delivery_day %= 7;
                }
                echo "День доставки: $delivery_day";
            ?>
        </div>
        <div class="task">
            <h3>Который час</h3>
            <?php
                $number_hours = 30;
                $last_number = $number_hours % 10;
                if ($last_number >= 5 && $last_number <=20 || $last_number == 0) {
                    echo "$number_hours часов";
                } elseif ($last_number == 1) {
                    echo "$number_hours час";
                } elseif ($last_number >= 2 && $last_number <= 4) {
                    echo "$number_hours часа";
                }
            ?>
        </div>
    </div>
</body>
</html>