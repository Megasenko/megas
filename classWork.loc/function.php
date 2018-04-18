<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 06.04.18
 * Time: 19:51
 */
//function myStrlen($a)
//{
//    $i = 0;
//    while ($a{$i}) {
//        $i++;
//    }
//    return $i;
//}
//
//
//function myImplode($arr)
//{
//    $res = null;
//    foreach ($arr as $value) {
//        $res .= $value;
//    }
//
//    return $res;
//}
//
//function myImplode2($del, $arr)
//{
//    $res = null;
//    $i = 0;
//    foreach ($arr as $value) {
////        $res = $res . $value;
//        if (isset($arr[$i + 1])) {
//            $res .= $value.$del;
//        } else {
//            $res .= $value;
//        }
//
//        $i++;
//    }
//
//    return $res;
//}


//foreach ($arr2 as $key => $value) {
//    if ($key {0} && isset ($arr1[$key])){
//        $arr1[$key] = $value;
//    } else {
//        if ($key {0}){
//            $arr[$key] = $value;
//        } else {
//            $arr1[]=$value;
//        }
//    }
//
//    return $arr1;
//}


function myArrayUnique($arr)
{
    foreach ($arr as $value) {

        foreach ($arr as $val) {
            if ($value == $val) {
                unset ($arr[$key]);
            }
        }

    }
    return $arr;
}

$arr = [1, 2, 3, 4, 3, 4, 4, 5, 6, 1];
var_dump(myArrayUnique($arr));

function calc()
{


    if ($_POST) {
        $operand = $_POST['operand'];
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        if ($operand == "*") {
            return $val1 * $val2;
        } elseif ($operand == '/' && $val2 != 0) {
            return $val1 / $val2;
        } elseif ($operand == '-') {
            return $val1 - $val2;
        } elseif ($operand == '+') {
            return ($val1 + $val2);
        } elseif ($val2 == '0') {
            return 'Error!';
        }
        return 'Error';
    }
}

// пузырьковая сортировка

function mySortirovka($array)
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
        echo true;
        break;
    }
}