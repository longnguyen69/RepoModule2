<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include '../class_lib/Human.php';
        include '../class_lib/HumanManager.php'; // them hai lop quan ly thong tin nhap vao

        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];

        $human = new Human($name, $age, $address); // lay thong tin về đối tượng human nhập vào
        $linkJsonSave = new HumanManager('../DataJson/data.json'); // tao nơi lưu trữ data nhap
        $linkJsonSave->addHuman($human); // gọi phương thức thêm và truyền vào thông tin đối tượng nhập
        header("Location: ../index.php");

    }