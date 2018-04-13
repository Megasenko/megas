<?php
echo "Занятие №3 в аудитории";
echo"<br>";
//$arr=[1,2,3,4,3,4,4,5,6,1];
//foreach ($arr as $value ){
//
//    foreach ($arr as $key => $val ){
//        if ($value == $val) {
//            unset ($arr[$key]);
//        }
//    }
//
//}
//var_dump($arr);


function customTrim($string)
{
    $i = 0;
    $arr = [];
    while (isset($string{$i})) {
        $arr[] = $string{$i};
        $i++;
    }

    foreach ($arr as $key => $value) {
        if ($value == ' ') {
            unset($arr[$key]);
        } else {
            break;
        }
    }

    for ($q = count($arr); $q > 0; $q--) {
        if ($arr[$q] == ' ') {
            unset($arr[$q]);
        } else {
            break;
        }
    }

    $res = null;
    foreach ($arr as $v) {
        $res .= $v;
    }

    return $res;
}

var_dump(customTrim('     kjv bnml  kjn bv bn         '));