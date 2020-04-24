<?php

$arrayRandom = [];
for ($i = 0; $i < 10; $i++) {
    $arrayRandom[$i] = rand(1, 101);
}

function displayNum($arr, $value){
    $count = 0;
    foreach ($arr as $items){
        if ($value == $items){
            $count++;
        }
    }
    return $count;
}
foreach ($arrayRandom as $item){
    echo $item . " ";
}
var_dump(displayNum($arrayRandom, 20));