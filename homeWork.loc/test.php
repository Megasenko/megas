<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */

function myTrim($string)
{
    $del = ' ';
    $str=null;
    $i=0;
    while ($string{$i} == $del){
           $string{$i}=null;
            if (($string{$i+1} != $del)){
                $ok=true;
                break;
            }
        $i++;
    }
    $j=$i+1;
    while ($ok){
        $str.=$string{$j};
        if(!isset($string{$j+1})){
            $ok=false;
        }
        $j++;
    }

    $k=$j;
        while ($string{$k}){
            if ($string{$k} != $del){
//                ljhf,jnfnm

            }
        }
        $k--;
    return $str;
}

$p = '     qwerty qwerty   ';
var_dump(trim($p));
echo "<br>";
var_dump(myTrim($p));




