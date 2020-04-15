<?php
include '../class_lib/Human.php';
include '../class_lib/HumanManager.php';

$humanManager = new HumanManager("../DataJson/dataHuman.json");
$index = $_GET['index']; //chỉ số phần tử
$human = $humanManager->getHumanByIndex($index);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>#</td>
        <td>Detail</td>
    </tr>
    <tr>
        <td>Name: </td>
        <td><?php echo $human->getName(); ?></td>
    </tr>
    <tr>
        <td>Sex: </td>
        <td><?php echo '#' ?></td>
    </tr>
    <tr>
        <td>Date: </td>
        <td><?php echo '#' ?></td>
    </tr>
    <tr>
        <td>Address: </td>
        <td><?php echo $human->getAddress(); ?></td>
    </tr>
    <tr>
        <td>Detail: </td>
        <td><?php echo '#' ?></td>
    </tr>
</table>
</body>
</html>
