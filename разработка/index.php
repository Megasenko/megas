<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 02.04.18
 * Time: 19:33
 */

//function myAge($age)
//{
//    echo "Мне $age лет";
//}
//
//
//myAge( $_GET['age']);

//function Calc (int $a , string $b, int $c)
//{
//    if ($b=='+'){
//        echo $a+$c;
//    }
//    elseif ($b=='-'){
//        echo $a-$c;
//    }
//    elseif ($b=='*'){
//        echo $a*$c;
//    }
//    elseif ($b=='/' && $c != 0){
//
//        echo $a/$c;
//    }
//    else {
//        echo 'Error';
//    }
//}
//Calc(1,'/',122122);

function customEmpty ($arr)
{
    if (count ($arr) != 0 && is_array($arr) ){
        return true;
    }
    else {
        return false;
    }
}

var_dump(customEmpty([1,2]));