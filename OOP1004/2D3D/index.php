<?php
include '2D/Draw2D.php';
include '3D/Draw3D.php';

$draw2D = new Draw2D(5,6);
$arr = $draw2D->getXY();
var_dump($arr);
$draw3D = new Draw3D(5,6,7);
$arr2 = $draw3D->getXY();
var_dump($arr2);