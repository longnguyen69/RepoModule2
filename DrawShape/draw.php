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
<div id="menu">
    <form method="post">
        <select name="shapeName">
            <option>Rectangle</option>
            <option>Triangle</option>
        </select>
        <input type="submit" name="btnDraw" value="Draw Shape">
    </form>
</div>

<?php
    if (isset($_POST['btnDraw'])){
        switch ($_POST['shapeName']){
            case Rectangle:
                for ($i = 1; $i <= 5; $i++){
                    for ($j = 1; $j <= $i; $j++){
                        echo "*";
                        if ($j < $i){
                            echo ' ';
                        }
                    }
                    echo "</br>";
                }
                break;
            case Triangle:
                for ($x = 1; $x <= 10; $x++){
                    for ($y = 1; $y <= 20; $y++){
                        echo "*";
                        if ($y < 20){
                            echo " ";
                        }
                    }
                    echo "</br>";
                }
                break;
        }
    }
?>
</body>
</html>
