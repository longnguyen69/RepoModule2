<?php

function creatArr($index)
{
    $arr = [];
    for ($i = 0; $i < $index; $i++) {
        $num = random_int(0, 99);
        array_push($arr, $num);
    }
    return $arr;
}

$arr1 = creatArr(10);
$arr2 = creatArr(10);
$arr3 = creatArr(20);

function arrMerge($array1,$array2, $array3)
{
    for ($a = 0; $a < count($array1); $a++) {
        $array3[$a] = $array1[$a];

    }
    for ($b = 0; $b < count($array2); $b++) {
        $array3[$b + count($array2)] = $array2[$b];

    }
    var_dump($array3);
    return $array3;
}
$i = arrMerge($arr1,$arr2,$arr3);
foreach ($i as $value){
    echo $value . ', ';
}