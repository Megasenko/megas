<?php
/**
 * Created by PhpStorm.
 * User: megas
 * Date: 07.04.18
 * Time: 22:18
 */


function myExplode($del, $tags)
{
    $w = null;
    $i = 0;
    while (isset($tags{$i})) {

        if ($tags{$i} != $del) {
            $w .= $tags{$i};
        }
        elseif($tags{$i} == $del){
            $res=$w."1 ";
        }
//        else {
//
//
//        }
        $res = $w;
        $i++;

    }

    print_r($res);
}

$str = "               test function explode            ";
$res1 = explode(" ", $str);
print_r($res1);
echo "<br>";
myExplode(" ", $str);



