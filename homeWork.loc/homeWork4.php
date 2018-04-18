<?php
//echo "Домашняя работа";

echo "<br>";

function myRound($float)
{
    $float = (string)$float;
    $i = 0;
    $number = null;
    while (isset($float{$i})) {
        $res[] = $float{$i};
        $i++;
    }
    $i = 0;
    foreach ($res as $val) {
        if ($val != '.') {
            $int[] = $val;
            $i++;
            $proverka = $res[$i + 1];
        } else break;
    }

    $proverka *= 1;
    foreach ($int as $val) {
        $number .= $val;
    }
    if ($proverka < 5) {
        $result = $number + 0;
    } else {
        $result = $number + 1;
    }

    return $result;
}
echo myRound($numb = 2222.34567890);