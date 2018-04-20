// Работает только с англ словами , русские в масив вносяться как два символа.
function myStrlen ($a)
{
    if(empty($a)) {
        echo "Введите строку для определения длинны";
    } else {
        $b = str_split($a);
        $d = array_flip($b);
        end($b);
        $e = end($d);
        $strlen = $e + 1;
        echo $strlen;
    }
}
myStrlen("aaaaaaaaaa");

// Лучшего варианта в сети не нашлось для русского текста 

function myStrlen($a)
{
    if (empty($a)) {
        echo "0";
    } else {
        $b = preg_split('//u', $a, -1, PREG_SPLIT_NO_EMPTY);
        $d = array_flip($b);
        end($b);
        $e = end($d);
        $strlen = $e + 1;
        echo $strlen;
    }
}

myStrlen("ййй");

// русский не работает , любой символ опять видет как два 

function myStrlen($a)
{
    for ($i = 0; ; $i++) {
        if (!isset ($a{$i})) {
            break;
        } elseif (isset ($a{$i})) {
            $z[] = $i + 1;
        }
    }
    $q = end($z);
    echo $q;
    echo $a{0};
}

myStrlen('я');