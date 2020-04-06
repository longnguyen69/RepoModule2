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
$arrInt = [1,4,6,87,3,5,7,8,234,76,45];
    function findMin($arr){
        $index = 0;
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            if ($min > $arr[$i]){
                $min = $arr[$i];
                $index = $i;
            }
        }
        return $index;
    }
    echo findMin($arrInt);
?>
</body>
</html>