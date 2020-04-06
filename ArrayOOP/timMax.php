<?php


function findMax()
{
    $arr = [
        [12,32,51,53,63,1236,63],
        [12,44,56,573,24,45,234],
        [434,23,42,542,123,425,13]
    ];
    $index1 = 0;
    $index2 = 0;
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
                $index1 = $i;
                $index2 = $j;
            }
        }
    }
    return $max . " ở vị trí " . "[" . $index1 . "]" . "[" . $index2 . "]";
}
echo findMax();
