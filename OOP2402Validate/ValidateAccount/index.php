<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $input = $_REQUEST['input'];
    $checkAcc = $_REQUEST['btnCheck'];
    var_dump($checkAcc);

    function checkAccount($acc){
        $pattern = "/^[a-z0-9_]{6,}$/";  // "/^\w{6,}$/"
        if (preg_match($pattern,$acc)){
            echo "Correct account";
        } else {
            echo "Incorrect account";
        }
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
    <label>Input: </label><input type="text" name="input" value="<?php echo $input?>">
    <button type="submit" name="btnCheck" value="isCorrect">Check Acc</button>
    <?php
        if (isset($checkAcc)){
            checkAccount($input);
        }
    ?>
</form>
</body>
</html>
