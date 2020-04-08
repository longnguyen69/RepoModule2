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

if (isset($_POST['calSum'])) {
    $arrMatrix = [];
    for ($n = 0; $n < 2; $n++) {
        $arrMatrix[$n] = [];
        for ($m = 0; $m < 2; $m++) {
            $arrMatrix[$n][$m] = $_POST['value-' . $n . $m];
        }
    }
    function sumRow($arr)
    {
        $sum = 0;
        for ($i = 0; $i < 1; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $sum += $arr[$i][$j];
            }
        }
        return $sum;
    }

    echo sumRow($arrMatrix);
}
?>
<form method="post">
    <table>
        <?php for ($i = 0; $i < 2; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 4; $j++): ?>
                    <td><input type="number" name="value-<?php echo $i . $j ?>" placeholder="0"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
        <tr>
            <td><input type="submit" name="calSum" value="SUMColumns"/></td>
        </tr>
    </table>
</form>
</body>
</html>
