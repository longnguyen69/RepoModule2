<?php
include 'iFan.php';

$fan1 = new iFan();
$fan1->setSpeed(FAST);
$fan1->setOn(true);
$fan1->setRadius(10);
$fan1->setColor(yellow);

echo $fan1->status();