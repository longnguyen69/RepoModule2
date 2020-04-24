<?php

function finMin($arr)
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}
 function finMax($arr){
    $max = $arr[0];
    foreach ($arr as $value){
        if ($max < $value){
            $max = $value;
        }
    }
    return $max;
 }

$arrayMin = [];
for ($i = 0; $i < 100; $i++) {
    $arrayMin[$i] = rand(1, 101);
}
foreach ($arrayMin as $value) {
    echo $value . " ";
}
echo "the Min: " . finMin($arrayMin);
echo "the Max: " . finMax($arrayMin);