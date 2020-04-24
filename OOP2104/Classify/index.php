<?php
if (isset($_POST['check'])) {
    $arr = explode(',', $_POST['input']);


    $arrViettel = [];
    $arrVinaphone = [];
    $arrMobifone = [];
    foreach ($arr as $items) {
        $check = substr($items, 0, 3);
        $check1 = substr($items, 0, 4);


        switch ($check1){
            case "0123":
            case "0124":
            case "0125":
            case "0127":
            case "0129":
            array_push($arrVinaphone, $items); break;
            case "0162":
            case "0163":
            case "0164":
            case "0165":
            case "0166":
            case "0167":
            case "0168":
            case "0169":
            array_push($arrViettel, $items); break;
            case "0120":
            case "0122":
            case "0121":
            case "0126":
            case "0128":
            array_push($arrMobifone, $items); break;
        }

        switch ($check) {
            case "094":
                array_push($arrVinaphone, $items);break;
            case "098":
            case "097":
            case "096":
                array_push($arrViettel, $items);

                break;
            case "090":
                array_push($arrMobifone, $items); break;
        }
    }

    foreach ($arrMobifone as $value) {
        echo "Mobifone: " . $value . "</br>";
    }
    foreach ($arrVinaphone as $value) {
        echo "Vinaphone: " . $value . "</br>";
    }
    foreach ($arrViettel as $value) {
        echo "Viettel: " . $value . "</br>";
    }
}
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
    <label>input:</label>
    <textarea name="input" cols="30" rows="5"></textarea>
    <button type="submit" name="check">Check</button>
</form>
</body>
</html>
