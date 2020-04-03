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
function isFind($n){ // check n co phai la so nguyen to
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i < $n; $i++){
        if ($n % $i === 0){
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 100; $i++){
    if (isFind($i)){
        echo $i . ', ';
    }
}
?>

</body>
</html>
