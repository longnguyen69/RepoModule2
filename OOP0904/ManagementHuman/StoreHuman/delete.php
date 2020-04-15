<?php
include '../class_lib/HumanManager.php';
include '../class_lib/Human.php';

$humanManager = new HumanManager("../DataJson/dataHuman.json");
$index = $_GET['index']; //chỉ số phần tử
$img = $_GET['img']; //chỉ số phần tử
$human = $humanManager->deleteHuman($index, $img);
header("Location: ../index.php");


