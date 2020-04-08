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
function findString($x){
    $str = str_split('hello, How are you?');
    $count = 0;
    for ($i = 0; $i < count($str); $i++){
        if ($str[$i] == $x){
            $count += 1;
        }
    }
    return $count;
}
if (isset($_GET['findString'])){
    $x = $_GET['char'];
    echo 'The number of element occurrences: ' . findString($x);
}
?>
<form method="get">
Commit: <input type="text" name="char" placeholder="VD: a">
    <input type="submit" name="findString" value="Count">
</form>
</body>
</html>