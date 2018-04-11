<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */

function myExplode($delimiter, $string)
{
    $w = null;
    $i = 0;
    while (isset($string{$i})) {
        if ($string{$i} != $delimiter) {
            $w .= $string{$i};
        } elseif ($string{$i} === $delimiter) {
            $res[] = $w;
            $w=null;
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
