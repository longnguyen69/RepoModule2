<?php
include '../class_lib/HumanManager.php';
include '../class_lib/Human.php';

$humanManager = new HumanManager("../DataJson/data.json");
$index = $_GET['index']; //chỉ số phần tử
$human = $humanManager->deleteHuman($index);
header("Location: ../index.php");


