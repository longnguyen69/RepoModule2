<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Students.php";
    include "../class/Manager.php";

    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];

    $student = new Students($name, $age, $address);
    $studentManager = new Manager("../data/data.json");
    $studentManager->add($student);
    header("Location: ../index.php");

}