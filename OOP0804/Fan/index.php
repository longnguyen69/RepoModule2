<?php
include 'iFan.php';

$fan1 = new iFan();
$fan1->setSpeed(FAST);
$fan1->setOn(true);
$fan1->setRadius(10);
$fan1->setColor(yellow);

echo $fan1->toString();

$fan2 = new iFan();
$fan2->setSpeed(MEDIUM);
$fan2->setOn(false);
$fan2->setRadius(5);
$fan2->setColor(red);

echo $fan2->toString();