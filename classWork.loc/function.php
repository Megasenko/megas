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


$arr=[1,2,3,4,3,4,4,5,6,1];
foreach ($arr as $value ){

  foreach ($arr as $val ){
      if ($value == $val) {
          unset ($arr[$key]);
      }
  }

}
var_dump($arr);