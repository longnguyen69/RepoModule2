//

// <?php
//function findMax()
//{
//    $arr = [
//        [12,32,51,53,63,1236,63],
//        [12,44,56,573,24,45,234],
//        [434,23,42,542,123,425,13]
//    ];
//    $index1 = 0;
//    $index2 = 0;
//    $max = $arr[0][0];
//    for ($i = 0; $i < count($arr); $i++) {
//        for ($j = 0; $j < count($arr[$i]); $j++) {
//            if ($max < $arr[$i][$j]) {
//                $max = $arr[$i][$j];
//                $index1 = $i;
//                $index2 = $j;
//            }
//        }
//    }
//    return $max . " ở vị trí " . "[" . $index1 . "]" . "[" . $index2 . "]";
//}
//echo findMax();
//?>
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
<form method="post" action="creatTable.php">
    rows: <input type="text" name="row">
    Column: <input type="text" name="column">
    <input type="submit"name="creat" value="OK">
</form>
</body>
</html>