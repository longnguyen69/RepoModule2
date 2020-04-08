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
$arrIn = [1, 2, 3, 5, 4, 7];

function findX($x)
{
    global $arrIn;
    for ($i = 0; $i < count($arrIn); $i++) {
        if ($arrIn[$i] == $x) {
            return $i;
        }
    }
    return -1;
}

function delX($x)
{
    $index = findX($x);
    global $arrIn;
    if ($index != -1) {
        for ($i = 0; $i < count($arrIn); $i++){
            if ($arrIn[$i] == $x){
                unset($arrIn[$i]);
            }
        }
        var_dump($arrIn);
    }
    return $arrIn;
}

if (isset($_GET['delete'])) {
    $x = $_GET['numDel'];
    delX($x);
}
?>
<form method="get">

    Number Del: <input type="text" name="numDel" placeholder="VD: 50"/>
    <input type="submit" name="delete" value="DELETE">
</form>
</body>
</html>
