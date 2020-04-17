<?php
include 'inter/Colorable.php';
include "class/Square.php";
include 'class/Geometry.php';

$square1 = new Square('circle', 5);
$area = new Geometry();
var_dump($area->areaCircle($square1));
var_dump($area->howToColor());
