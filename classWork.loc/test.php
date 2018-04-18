<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 14.04.18
 * Time: 13:16
 */
function myFactorial($x)
{
    if ($x==0){
        return 1;
    } else {
        return $x*myFactorial($x-1);
    }
}
echo myFactorial(5);