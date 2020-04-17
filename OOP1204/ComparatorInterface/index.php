<?php
include 'inter/Comparator.php';
include 'class/Circle.php';
include  'class/ComparatorCircle.php';
$circle1 = new Circle(10, 'CircleOne');
$circle2 = new Circle(10, 'CircleTwo');
$comparator = new ComparatorCircle();
var_dump($comparator->ComparatorRate($circle1,$circle2));