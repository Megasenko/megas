<?php

// Работает только с англ словами , русские в масив вносяться как два символа.
echo "_____<b>STRLEN</b>______:";
echo "<br>";
function myStrlen($a)
{
    if (empty($a)) {
        echo "Введите строку для определения длинны";
    } else {
        $b = str_split($a);
        $d = array_flip($b);
        end($b);
        $e = end($d);
        $strlen = $e + 1;
        echo $strlen;
    }
}

myStrlen("qwerty");

echo "<br><br>";

// Лучшего варианта в сети не нашлось для русского текста

function myStrlen2($a)
{
    if (empty($a)) {
        echo "0";
    } else {
        $b = preg_split('//u', $a, -1, PREG_SPLIT_NO_EMPTY);
        $d = array_flip($b);
        end($b);
        $e = end($d);
        $strlen = $e + 1;
        echo $strlen;
    }
}

myStrlen2("qwerty");

echo "<br><br>";

// русский не работает , любой символ опять видет как два

function myStrlen3($a)
{
    for ($i = 0; ; $i++) {
        if (!isset ($a{$i})) {
            break;
        } elseif (isset ($a{$i})) {
            $z[] = $i + 1;
        }
    }
    $q = end($z);
    echo $q;

}

myStrlen3('qwerty');

echo "<br>";


function myStrlen4($a)
{
    $i = 0;
    while ($a{$i}) {
        $i++;
    }
    return $i;
}

echo myStrlen4('qwerty');

echo "<br><br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>EMPTY</b>______:";
echo "<br>";

function myEmpty($x)
{
    $qqq = null;
    switch ($x) {
        case "":
            return true;
            break;
        case null:
            return true;
            break;
        case false:
            return true;
            break;
        case array():
            return true;
            break;
        case $qqq:
            return true;
            break;
        default :
            return false;
    }

}

$x = " ";
var_dump(empty($x));
echo "<br>";
var_dump(myEmpty($x));


echo "<br><br>";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>TRIM</b>______:";
echo "<br>";

function myTrim($tags)
{
    $qq = ' ';

    if ($tags{0} != $qq) {
        $z = $tags;
    } else {
        $i = 0;
        while ($tags{$i} == $qq) {
            $z = substr($tags, $i + 1);
            $i++;
        }
    }

    if ($z{strlen($z) - 1} != $qq) {
        $w = $z;
    } else {
        for ($i = 1; $z{strlen($z) - $i} == $qq; $i++) {
            $w = substr($z, 0, -$i);
        }
    }
    var_dump($w);
}

$p = '     qwerty  qwerty   ';
var_dump(trim($p));
echo "<br>";
myTrim($p);


echo "<br><br>";


////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>INTVAL</b>______:";
echo "<br>";

function myIntval($x)
{
    if ($x > 0) {
        $b = $x % ($x + 1);
        echo($b);
    } else {
        $b = $x % ($x - 1);
        echo($b);
    }
}

$x = 1123456789098.3456781;
echo intval($x);
echo "<br>";
myIntval($x);

echo "<br><br>";


///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>IMPLODE</b>______:";
echo "<br>";


function myImplode($arr)
{
    $res = null;
    foreach ($arr as $value) {
        $res .= $value;
    }

    return $res;
}

echo myImplode(['a' => 'w', 'b' => 'o', 'c' => 'r', 'd' => 'l', 'e' => 'd']);
echo "<br>";

function myImplode2($del, $arr)
{
    $res = null;
    $i = 0;
    foreach ($arr as $value) {
//        $res = $res . $value;
        if (isset($arr[$i + 1])) {
            $res .= $value . $del;
        } else {
            $res .= $value;
        }

        $i++;
    }

    return $res;
}

echo myImplode2(",", ['a' => 'w', 'b' => 'o', 'c' => 'r', 'd' => 'l', 'e' => 'd']);
echo "<br><br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>EXPLODE</b>______:";
echo "<br>";


function myExplode($delimiter, $string)
{
    $w = null;
    $i = 0;
    while (isset($string{$i})) {
        if ($string{$i} != $delimiter) {
            $w .= $string{$i};
        } elseif ($string{$i} === $delimiter) {
            $res[] = $w;
            $w = null;
        }
        $i++;
    }
    $res[] = $w;
    print_r($res);
}

$str = "test - function, explode";
echo $str;
echo "<br>";
$res1 = explode(" ", $str);
print_r($res1);
echo "<br>";
myExplode(" ", $str);
echo "<br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>ARRAY MERGE</b>______:";
echo "<br>";

// Для обычных массивов с цифрами
function myArrayMerge($arr1, $arr2)
{
    $arr3 = $arr1;
    for ($i = 0; $i < count($arr2); $i++) {
        $arr3[] = $arr2[$i];
    }
    print_r($arr3);
}

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 4, 1, 9, 10];


$result = array_merge($arr1, $arr2);
echo "<pre>";
print_r($result);
echo "<br>";
myArrayMerge($arr1, $arr2);

echo "<br><br>";

function myArrayMerge2($arr1, $arr2)
{
    foreach ($arr1 as $key => $value) {
        $key1 = $key;
        $val1 = $value;
        foreach ($arr2 as $key => $value) {
            $key2 = $key;
            $val2 = $value;
            if (is_string($key1) && is_string($key2)) {
                if ($key2 == $key1) {
                    $result1[$key1] = $val2;
                } elseif ($key2 != $key1) {
                    $result1[$key1] = $val1;
                    $result1[$key2] = $val2;
                }
            } elseif (is_numeric($key1) && is_numeric($key2)) {
                $i = 0;
                while (isset ($arr1[$i])) {
                    $result1[$i] = $arr1[$i];
                    $i++;
                }
            }
        }
    }
    $i = 0;
    while (isset ($arr2[$i])) {
        $result1[] = $arr2[$i];
        $i++;
    }
    return $result1;
}


$arr1 = ["color" => "red", 2, 4, 'www' => 'site'];
$arr2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];

$result = array_merge($arr1, $arr2);
echo "<pre>";
print_r($result);
echo "<br>";
print_r(myArrayMerge2($arr1, $arr2));

echo "<br><br>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "_____<b>ARRAY UNIQUE</b>______:";
echo "<br>";

function myArrayUnique($a)
{
    $b = [];
    for ($i = 0; $i < count($a); $i++) {
        $next = true;
        for ($j = 0; $j < count($b); $j++) {
            if ($a[$i] == $b[$j]) {
                $next = false;
            }
        }
        if ($next) {

            $b[$i] = $a[$i];
        }
    }
    return $b;
}

$a = [1, 0, 2, 9, 3, 8, 4, 7, 5, 6, 6, 5, 7, 4, 8, 3, 9, 2, 0, 1];

echo "<pre>";
print_r(array_unique($a));
print_r(myArrayUnique($a));

echo "<br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////