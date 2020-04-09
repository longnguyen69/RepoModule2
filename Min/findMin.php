
<?php
$arr = [1,3,5,2,46,7,6];
function findMinArr($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++){
        if ($min > $arr[$i]){
            $min = $arr[$i];
        }
    }
    return $min;
}
echo findMinArr($arr);


