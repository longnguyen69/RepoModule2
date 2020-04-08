<?php
include 'Stopwatch.php';
function createArray()
{
    $arr = [];
    for ($i = 0; $i <= 100000; $i++) {
        $arr[$i] = rand(0, 100000);
    }
    return $arr;
}

function sortArr()
{
    sort(createArray(),SORT_NUMERIC);
}

$swatch = new Stopwatch();
$swatch->getStartTime();
echo 'Start time: ' . $swatch->startTime() . '</br>';
sortArr();
$swatch->getStopTime();
echo 'End time: ' . $swatch->stopTime() . '</br>';
echo 'Time enforcement: ' . $swatch->getElapsedTime();
