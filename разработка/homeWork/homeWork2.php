<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 03.04.2018
 * Time: 13:26
 */
// 1.  Перевод в верхний регистр средствами пхп. Создайте переменную со словом в нижнем регистре (пример $string = ‘hello’) выведите на экран фразу в верхнем регистре.

$string = 'upper register';
$stringUp = mb_strtoupper($string);
echo $stringUp . "<br>";

// 2. Перевод числа из метров в километры. Создайте переменную с числовым значением, и выведите на экран это число конвертированное в километры.

function convector($m)
{
    if (isset($m) && is_numeric($m)) {
        $km = 1000;
        $rezult = $m / $km;
        echo $rezult . " км";
    } else {
        echo "Укажите тип данных в виде числа";
    }
}

convector(1111);
echo "<br>";

// 4. *** Напишите функцию которая будет принимать на вход два числа, и будет выводить на экран болшее.

function comparison($a, $b)
{
    if (is_bool($a) || is_bool($b) ^ $a == $b) {
        echo "Некоректно или равны";
    } elseif ($a > $b) {
        echo $a;
    } elseif ($a < $b) {
        echo $b;
    }
}

comparison(1, 2);
echo "<br>";

// 5. *** Напишите функцию, которая примет на вход массив, и выведет самое большое число

function maxArray($q)
{
    if (is_array($q)) {
        rsort($q);
        echo $q[0];
    } else {
        echo "Укажите тип данных в виде массива";
    }
}

maxArray([1, 2, 3]);
echo "<br>";

// 6. *** Задание со звездочкой, вывести в браузер “ряд фибоначчи”

//Первый вариант, выводит столько значений сколько в википедии.

$a = 0;
$b = 1;
echo $a . ' ' . $b . ' ';
for ($i = 2; $i < 22; $i++) {
    $c = $a + $b;
    echo $c . ' ';
    $d = $b;
    $b = $c;
    $a = $d;
}
echo "<br>";

// Второй вариант

$fibonache = [0, 1];
for ($i = 2; $i < 22; $i++) {
    $a = $fibonache[$i - 1] + $fibonache[$i - 2];
    $fibonache[] = $a;

}
foreach ($fibonache as $value) {
    echo $value . " ";
}
