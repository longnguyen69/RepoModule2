<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../class_lib/Human.php';
    include '../class_lib/HumanManager.php'; // them hai lop quan ly thong tin nhap vao

    $name = $_POST['name'];
    $age = $_POST['age'];
    $group = $_POST['group'];
    $address = $_POST['address'];

    $avatar = $_FILES['avatar']['tmp_name']; // lấy file từ trong temp ra
    $nameFile = $_FILES['avatar']['name']; // Gán file lấy ra vào với name đã điền ở ô name
    $pathStoreFile = "../Upload/" . $nameFile; // Đường dẫn đến file Upload
    move_uploaded_file($avatar, $pathStoreFile);

    $human = new Human($name, $age, $group, $address, $nameFile); // lay thong tin về đối tượng human nhập vào
    $linkJsonSave = new HumanManager('../DataJson/dataHuman.json'); // tao nơi lưu trữ data nhap
    $linkJsonSave->addHuman($human); // gọi phương thức thêm và truyền vào thông tin đối tượng nhập
    header("Location: ../index.php");

}

// cho name cua namefile ban dau em de la tmp_name