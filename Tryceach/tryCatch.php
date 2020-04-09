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

function sum($numberOne, $numberTwo)
{
    try {
        if ($numberOne / 2 + $numberTwo / 2 >= PHP_INT_MAX / 2) {
            throw new Exception("so nhap vao qua lon");
        }
        return $numberTwo + $numberOne;
    }
    catch (Exception $e){
        return $e->getMessage();
    }

}

function minus($numberOne, $numberTwo)
{
    try{
    if ($numberOne / 2 + $numberTwo / 2 >= PHP_INT_MAX / 2) {
        throw new Exception("so nhap vao qua lon");
    }
    return $numberOne - $numberTwo;
} catch (Exception $e){
        return $e->getMessage();
    }
}
function multiply($numberOne, $numberTwo)
{
    try {
        if ($numberOne / 2 + $numberTwo / 2 >= PHP_INT_MAX / 2) {
            throw new Exception("so nhap vao qua lon");
        }
        return $numberTwo * $numberOne;
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function divide($numberOne, $numberTwo)
{
    try {
        if ($numberTwo == 0) {
            throw new Exception('Division by zero');
        }
        return $numberOne / $numberTwo;
    } catch (Exception $e) {
        return $e->getMessage();
    }

}

if (isset($_POST['caculator'])) {
    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];

    switch ($_POST['sel']) {
        case 'Sum':
            echo sum($a, $b);
            break;
        case 'Minus':
            echo minus($a, $b);
            break;
        case 'Multiply':
            echo multiply($a, $b);
            break;
        case 'Divide':
            echo divide($a, $b);
            break;
    }
}
?>
<fieldset>
    <legend>Caculator</legend>
    <form method="post">
        <table>
            <tr>
                <td>First Operand</td>
                <td><input type="text" name="first" placeholder="0"></td>
            </tr>
            <tr>
                <td>Operator</td>
                <td><select name="sel">
                        <option>Sum</option>
                        <option>Minus</option>
                        <option>Multiply</option>
                        <option>Divide</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second Operand</td>
                <td><input type="text" name="second" placeholder="0"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="caculator" value="Caculate"></td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>
