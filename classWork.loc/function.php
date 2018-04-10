<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 06.04.18
 * Time: 19:51
 */
function myStrlen($a)
{
    $i = 0;
    while ($a{$i}) {
        $i++;
    }
    return $i;
}


function myImplode($arr)
{
    $res = null;
    foreach ($arr as $value) {
        $res .= $value;
    }

    return $res;
}

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
