<?php
if (isset($_POST['update'])) {
    include '../class_lib/Human.php';
    include '../class_lib/HumanManager.php'; // them hai lop quan ly thong tin nhap vao

    $name = $_POST['name'];
    $age = $_POST['age'];
    $group = $_POST['group'];
    $address = $_POST['address'];
    $image = $_FILES['avatar'];

    $index = $_GET['index'];
    $linkJsonSave = new HumanManager('../DataJson/dataHuman.json');
    $human = $linkJsonSave->getHumanByIndex($index);

    $human->setName($name);
    $human->setAge($age);
    $human->setGroup($group);
    $human->setAddress($address);

    // xoa anh cu trong thu muc
    unlink('../Upload/' . $human->getImage()); //xoa anh cu

    //thay the bang anh moi
    // lay duong dan anh moi
    $avatarNew = $_FILES['avatar']['tmp_name']; //bien tam tmp_name sinh ra huwng anh khi co anh moi duoc Upload tam thoi len server

    // luu anh  moi vao thu muc Upload
    $nameFile = $_FILES['avatar']['name'];
    $pathStoreFile = "../Upload/" . $nameFile;
    move_uploaded_file($avatarNew, $pathStoreFile);

    //set lai ten file
    $human->setImage($nameFile);

    $linkJsonSave->updateHuman($index, $human);
    header("Location: ../index.php");

}