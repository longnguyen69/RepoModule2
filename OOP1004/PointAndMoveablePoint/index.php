<?php
include 'MoveablePoint.php';
include 'Point.php';

$point = new Point(5, 10);
echo 'toa do x: ' . $point->getX() . ' toa do y: ' . $point->getY();
$pointMova = new MoveablePoint(15,20);
echo 'toa do x: ' . $pointMova->getX() . ' toa do y: ' . $pointMova->getY();