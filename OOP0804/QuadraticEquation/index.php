<?php

if (isset($_POST['count'])){
    include 'QuadraticEquation.php';

    $a = $_POST['numberA'];
    $b = $_POST['numberB'];
    $c = $_POST['numberC'];

    $quiz = new QuadraticEquation($a,$b,$c);
    $delta = $quiz->getDiscriminant();
    if ($delta > 0){
        echo 'Answer n1: ' . $quiz->getRoot1($delta) . '</br>';
        echo 'Answer n2: ' . $quiz->getRoot2($delta);
    } elseif ($delta == 0){
        echo 'Answer 1: ' . $quiz->getRoot1($delta);
    } else{
        echo 'No answer';
    }
}
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
<form method="post">
    Nhap so a: <input type="number" name="numberA"> <br>
    Nhap so b: <input type="number" name="numberB"> <br>
    Nhap so c: <input type="number" name="numberC"> <br>
     <input type="submit" name="count" value="COUNT">
</form>
</body>
</html>