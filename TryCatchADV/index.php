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
<?php
function number()
{
    $arrNumber = [];
    for ($i = 0; $i < 100; $i++) {
        $num = random_int(0, 99);
        array_push($arrNumber, $num);
    }
    return $arrNumber;
}

function findNumber($index, $arr)
{
    try {
        if ($index < 0 || $index >= 100) {
            throw new Exception("Chỉ số vượt quá giới hạn của mảng");
        }
        return $arr[$index];
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
if (isset($_POST['find'])) {
    $index = $_POST['number'];
    $arr = number();
    $i = findNumber($index, $arr);
    echo 'phan tu ' . $index . ' ban vua nhap co gia tri ' . $i;
}
?>
<form method="post">
Number: <input type="text" name="number" placeholder="VD: 30"/>
<input type="submit" name="find" value="Find Number"/>
</form>
</body>
</html>