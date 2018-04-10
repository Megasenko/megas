<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */

function myImplode2($del, $arr)
{
    $res = null;
    $i = 0;
    foreach ($arr as $value) {
//        $res = $res . $value;
        if (isset($arr[$i + 1])) {
            $res .= $value.$del;
        } else {
            $res .= $value;
        }

        $i++;
    }

    return $res;
}
echo myImplode2(",",['a'=>'w','b'=>'o','c'=>'r','d'=>'l','e'=>'d']);