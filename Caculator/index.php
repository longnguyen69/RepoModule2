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
if (isset($_POST['caculator'])){
    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];

    switch ($_POST['sel']){
        case 'Sum':
            $result = $a + $b;
            echo 'ket qua: ' . $result;
            break;
        case 'Minus':
            $result = $a - $b;
            echo 'ket qua: ' . $result;
            break;
        case 'Multiply':
            $result = $a * $b;
            echo 'ket qua: ' . $result;
            break;
        case 'Divide':
            $result = $a / $b;
            echo 'ket qua: ' . $result;
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
                <td><input type="text" name="first"></td>
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
                <td><input type="text" name="second"></td>
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
