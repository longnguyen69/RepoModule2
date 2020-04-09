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
if (isset($_POST['creat'])){
    $rows = $_POST['row'];
    $cols = $_POST['column'];
}
?>
<?php
if (isset($_POST['findMax'])){
    $arrayMatrix = $_POST['value'];
    function checkMax($arr)
    {
        $max = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($max < $arr[$i]) {
                $max = $arr[$i];
            }
        }
        return "Max value = " . $max;
    }
    echo checkMax($arrayMatrix);
}
?>
<form method="post">
    <table>
        <?php for ($i = 0; $i < $rows; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $cols; $j++): ?>
                    <td><input type="number" name="value[]"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
        <tr>
            <td><input type="submit" name="findMax" value="Max"></td>
        </tr>
    </table>
</form>
</body>
</html>