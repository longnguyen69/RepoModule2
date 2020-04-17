<?php
include "ReverseStack.php";

$stack1 = new ReverseStack();
$stack1->addElementStack(1);
$stack1->addElementStack(2);
$stack1->addElementStack(3);
$stack1->addElementStack(4);
$stack1->addElementStack(5);
$stack1->addElementStack(6);

for ($i = 0; $i <= $stack1->countStack(); $i++){
    $data = $stack1->popElementStack();
    $arrReverse = $stack1->addArrayReverse($data);
}
var_dump($arrReverse);