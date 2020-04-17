<?php
include "StackSetup.php";

$stack1 = new StackSetup();

$stack1->insertStack(1);
$stack1->insertStack(2);
$stack1->insertStack(3);
$stack1->insertStack(4);
$stack1->insertStack(5);

$stack1->topStack();
var_dump($stack1->topStack());
$stack1->topStack();
var_dump($stack1->topStack());

$stack1->topStack();
