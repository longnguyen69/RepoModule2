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

if (isset($_POST['create'])) {
    $size = $_POST['size'];
    $matrix = [];
    for ($n = 0; $n < $size; $n++) {
        $matrix[$n] = [];
        for ($m = 0; $m < 2; $m++) {
            $matrix[$n][$m] = $_POST['value-' . $n . $m];
        }
    }
}
    function sumDiagonal($arr)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr); $j++) {
                if ($i == $j){
                $sum += $arr[$i][$j];
                }
            }
        }
        return $sum;
    }
if (isset($_POST['calSum'])){
    echo sumDiagonal($matrix);
}

?>
<form method="post">
    <table>
        <?php for ($i = 0; $i < $size; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $size; $j++): ?>
                    <td><input type="number" name="value-<?php echo $i . $j ?>" placeholder="0"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
        <tr>
            <td><input type="submit" name="calSum" value="SUM Diagonal"/></td>
        </tr>
    </table>
</form>
</body>
</html>
