<?php
if (isset($_POST['update'])){
    include '../class_lib/Human.php';
    include '../class_lib/HumanManager.php'; // them hai lop quan ly thong tin nhap vao

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $index = $_GET['index'];
    $linkJsonSave = new HumanManager('../DataJson/data.json');
    $human = $linkJsonSave->getHumanByIndex($index);

    $human->setName($name);
    $human->setAge($age);
    $human->setAddress($address);
    $linkJsonSave->updateHuman($index,$human);
    header("Location: ../index.php");

}