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
if (isset($_POST['convert'])){
    $input = (float)$_POST['inputMoney'];
    $rate = (int)$_POST['exchangeRate'];

    $output = $input * $rate;
}
?>
<form method="post">
    <h3>Enter the amount here</h3>
    <input type="text" name="inputMoney" placeholder="0" value="<?php echo $input ?>"/>
    <input type="text" name="exchangeRate" placeholder="23100" value="<?php echo $rate ?>"/>
    <input type="submit" name="convert" value="COVIT-19">
    <input type="text" name="output" placeholder="0" value="<?php echo $output ?>"/>
</form>
</body>
</html>
