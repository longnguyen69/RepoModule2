<?php
include 'MoveablePoint.php';
include 'Point.php';

$point = new Point(5, 10);
var_dump($point);
$pointSpeed = new MoveablePoint(5,10)