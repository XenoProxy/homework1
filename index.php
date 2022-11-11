<?php
    //task 1
    $a = 10;
    $b = 2;
    echo "Task 1 <br>",
        $a + $b, '<br>',
        $a - $b, '<br>',
        $a * $b, '<br>',
        $a / $b, '<br>';

    //task 2
    $x = 2;
    $y = 6;
    $z = 9;
    echo "<br> Task 2 <br>";
    echo ($x + 1)*4 - 2*($z - 2*$x**2 + $y**2), '<br>';

    //task 3
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "<br><br> Task 3 <br>";
    echo $result, '<br>';

    //task 4
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo "<br> Task 4 <br>";
    echo $text1, $text2, '<br>';

    //task 5
    $name = 'Ирина';
    echo "<br> Task 5 <br>";
    echo "Привет, $name! <br>";

    //task 6
    $num = '12345';
    echo "<br> Task 6 <br>";
    echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4], '<br>';

    //task7
    $hour = 60 * 60;
    $day = $hour * 24;
    $month = $day * 30;
    $year = $month *12; 
    $since_2000 = $year * 22;
    echo "<br> Task 7 <br>";
    echo "Секунд в часе: $hour <br>
          Секунд в сутках: $day <br>
          Секунд в месяце: $month <br>
          Секунд в году: $year <br>
          Секунд с начала 2000 года: $since_2000 <br>";
    
    //task 8 
    $hour = 23;
    $minute = 59;
    $second = 20;
    echo "<br> Task 8 <br>";
    echo $hour, ':', $minute, ':', $second, '<br>';

    //task 9
    echo "<br> Task 9 <br>";
    $var = 1;
    $var += 12;
    $var -= 14;
    $var *= 5;
    $var /= 7;
    $var++;
    $var--;
    echo $var, '<br>';

    //task 10
    echo "<br> Task 10 <br>";
    const FIRSTNAME = 'Мисюченко';
    $name = 'Ирина';
    $patronymic = 'Сергеевна';
    $age = 21;
    if (FIRSTNAME == 'Мисюченко'){
        echo "Меня зовут " . FIRSTNAME . "(" . mb_substr($name, 0, 1) . ". " . mb_substr($patronymic, 0, 1) . "." . ")" . "<br> 
        Мне $age год.";
    }
?>
