<?php
function myArrayKeyExists($key, $array)
{
    foreach ($array as $key1 => $val) {
        if ($key === $key1) {
            return true;
        }
    }
    return false;
}

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
$key = 'd';
var_dump(array_key_exists($key, $array));
echo '<br>';
var_dump(myArrayKeyExists($key, $array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayKeys($array)
{
    foreach ($array as $key => $value) {
        $keys[] = $key;
    }
    return $keys;
}

$array = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
print_r(array_keys($array));
echo '<br>';
print_r(myArrayKeys($array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayKombine($keys, $values)
{
    $i = 0;
    foreach ($keys as $key => $val) {
        $i++;
    }
    $size1 = $i;
    $j = 0;
    foreach ($values as $key => $val) {
        $j++;
    }
    $size2 = $j;
    if ($size1 === $size2) {
        $num = 0;
        foreach ($keys as $k => $v) {
            $array[$v] = $values[$num];
            $num++;
        }
        return $array;
    } else {
        echo '<b>Warning</b>: array_combine(): Both parameters should have an equal number of elements' . '<br>';
        return false;
    }
}

$keys = ['a', 'b', 'c', 'd'];
$values = [1, 2, 3, 4];

var_dump(array_combine($keys, $values));
echo '<br>';
var_dump(myArrayKombine($keys, $values));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArraySearch($needle, $haystrack)
{
    foreach ($haystrack as $key => $value) {
        if ($value === $needle) {
            $key1 = $key;
            return $key1;
        }
    }
    return false;
}

$array = [0 => 'q', 1 => 'w', 2 => 'e', 3 => 'r', 4 => 't', 5 => 'y'];
$need = 'y';
var_dump(array_search($need, $array));
echo "<br>";
var_dump(myArraySearch($need, $array));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myInArray($needle, $haystrack, $strict)
{
    foreach ($haystrack as $value) {
        if ($strict === false) {
            if ($value == $needle) {
                return true;
            }
        } elseif ($strict === true) {
            if ($value === $needle) {
                return true;
            }
        }
    }
    return false;
}

$array = ['q', 1, 'e', 'r', 't', 'y'];
$need = 'q';
$strict = false;
var_dump(in_array($need, $array, $strict));
echo "<br>";
var_dump(myInArray($need, $array, $strict));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayDiff($array1, $array2)
{
    foreach ($array1 as $key => $value) {
        foreach ($array2 as $item) {
            if ($value === $item) {
                unset ($array1[$key]);
            }
        }
    }
    return $array1;
}

$array1 = ['aaa' => 'one', 'bbb' => 'two', 'ccc' => 'three'];
$array2 = ['qwerty' => 'asdf', 'zzz' => 'one', 'jgjhgjgj' => 'three'];
print_r(array_diff($array1, $array2));
echo "<br>";
print_r(myArrayDiff($array1, $array2));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myArrayIntersect($array1, $array2)
{
    foreach ($array1 as $key => $value) {
        foreach ($array2 as $item) {
            if ($value === $item) {
                $array[$key] = $value;
            }
        }
    }
    return $array;
}

$array1 = ['aaa' => 'one', 'bbb' => 'two', 'ccc' => 'three'];
$array2 = ['qwerty' => 'asdf', 'zzz' => 'one', 'jgjhgjgj' => 'three'];
print_r(array_intersect($array1, $array2));
echo "<br>";
print_r(myArrayIntersect($array1, $array2));
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function mySort(&$array)
{
    foreach ($array as $value) {
        $arrayVal[] = $value;
    }
    $flag = true;
    while ($flag) {
        $size = count($arrayVal) - 1;
        $flag = false;
        for ($i = 0; $i < $size; $i++) {
            if ($arrayVal[$i] > $arrayVal[$i + 1]) {
                $tmp = $arrayVal[$i];
                $arrayVal[$i] = $arrayVal[$i + 1];
                $arrayVal[$i + 1] = $tmp;
                $flag = true;
            }
        }
    }
    $array = $arrayVal;
    if (!$flag) {
        return true;
    } else {
        return false;
    }
}

$array = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
    "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
    "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", " ", "!", "@",
    "#", "\\\$", "%", "^", "&", "*", "(", ")", "_", "-", "=", "+", "\\\\", "|", ",", "<", ".", ">", "?", "'",
    "\\\"", "`", "~"];
echo implode(" ", $array);
echo "<br>";
var_dump(mySort($array));
echo "<br>";
echo implode(" ", $array);
echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function mySort2(&$array)
{
    $size = count($array) - 1;
    for ($a = 0; $a < $size; $a++) {
        $flag = 0;
        for ($i = 0; $i < $size - $a; $i++) {
            $elem1 = $array[$i];
            $elem2 = $array[$i + 1];
            if ($elem1 > $elem2) {
                $array[$i] = $elem2;
                $array[$i + 1] = $elem1;
                $flag = 1;
            }
        }
    }
    if ($flag == 0) {
        return true;
    } else {
        return false;
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myMax($array)
{
    if ($array != []) {
        foreach ($array as $value) {
            $arrayVal[] = $value;
        }
        $size = count($arrayVal) - 1;
        for ($i = 0; $i < $size; $i++) {
            if ($arrayVal[$i] > $arrayVal[$i + 1]) {
                $tmp = $arrayVal[$i];
                $arrayVal[$i] = $arrayVal[$i + 1];
                $arrayVal[$i + 1] = $tmp;
            }
        }
        return $arrayVal[$size];
    } else {
        echo "<b>Warning</b>: myMax(): Array must contain at least one element <br>";
        return false;
    }
}

$array = ['b', 'a', 'd', 'c'];
print_r($array);
echo "<br>";
//$array = [ 1, 8, 7, 6, 5,0, 4, 3, 2, 9];
//$array=[];
print_r(myMax($array));
echo "<br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myMin($array)
{
    if ($array != []) {
        foreach ($array as $value) {
            $arrayVal[] = $value;
        }
        $size = count($arrayVal) - 1;
        for ($i = 0; $i < $size; $i++) {
            if ($arrayVal[$i] < $arrayVal[$i + 1]) {
                $tmp = $arrayVal[$i];
                $arrayVal[$i] = $arrayVal[$i + 1];
                $arrayVal[$i + 1] = $tmp;
            }
        }
        return $arrayVal[$size];
    } else {
        echo "<b>Warning</b>: myMin(): Array must contain at least one element <br>";
        return false;
    }
}

$array = ['b', 'c', 'a', 'd'];
//$array = [ 1, 8, 7, 6, 5,0, 4, 3, 2, 9];
//$array=[];
print_r(myMin($array));

echo "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function myRound($float)
{
    $float = (string)$float;
    $i = 0;
    $number = null;
    while (isset($float{$i})) {
        $res[] = $float{$i};
        $i++;
    }
    $i = 0;
    foreach ($res as $val) {
        if ($val != '.') {
            $int[] = $val;
            $i++;
            $proverka = $res[$i + 1];
        } else break;
    }

    $proverka *= 1;
    foreach ($int as $val) {
        $number .= $val;
    }
    if ($proverka < 5) {
        $result = $number + 0;
    } else {
        $result = $number + 1;
    }

    return $result;
}
echo myRound($numb = 2222.34567890);