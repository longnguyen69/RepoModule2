<?php
session_start();
if (isset($_POST['check'])) {

    function createArray($start, $end)
    {
        $arr = [];
        for ($i = $start; $i < $end; $i++) {
            $arr[$i] = $i;
        }
        return $arr;
    }

    if (isset($_SESSION['valueRandom'])) {
        $_SESSION['arr'] = createArray(0, 100);
        $_SESSION['low'] = 0;
        $_SESSION['high'] = 100;
        $_SESSION['result'] = 50;
    }

    if (isset($_POST['big'])){
        $_SESSION['low'] = $_SESSION['result'] + 1;
        $_SESSION['high'] = $_SESSION['arr'][100] -
    }
}

?>
<?php

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
    <label>Computer guess: </label><input type="text" name="select" value="<?php echo '#' ?>">
    <button type="submit" name="check">Check</button>
    <button type="submit" name="big">Bigger</button>
    <button type="submit" name="small">Lesser</button>
</form>
</body>
</html>
