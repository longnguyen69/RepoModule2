<?php
include "StackInterface.php";
include "QueueSymmetry.php";
include "StackSymmetry.php";

$str1 = "word";
$str2 = "drow";
$stack = new StackSymmetry();
$queue = new QueueSymmetry();

if (strlen($str1) != strlen($str2)) {
    exit("String no symmetry");
} else {
    for ($i = 0; $i < strlen($str1); $i++) {
        $stack->addStringToStack(substr($str1, $i, 1));
        $queue->addQueue(substr($str2, $i, 1));
    }
}

for ($i = 0; $i < strlen($str1); $i++){
    if ($stack->popStack() != $queue->popQueue()) {
        exit("String no symmetry");
    }
}
exit("Say yes");
