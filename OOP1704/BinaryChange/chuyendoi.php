<?php
$number = 10;
$count = 0;
$arr = [];
//while ($number >= 2){
//    $count = $number % 2;
//    array_push($arr, $count);
//    $number = $number - ($count * 2);
//}
do {
    $count = $number % 2;
    $number = ($number - $count) / 2;
    array_push($arr, $count);
} while ($number > 0);

var_dump(array_reverse($arr));

