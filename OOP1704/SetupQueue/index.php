<?php
include "QueueSetup.php";

$queue = new QueueSetup();

$queue->enqueue("1");
$queue->enqueue("2");
$queue->enqueue("3");

$queue->dequeue();

var_dump($queue);