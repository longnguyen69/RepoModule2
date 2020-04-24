<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $checkMail = $_REQUEST['checkMail'];
    $check = $_REQUEST['check']; // kiem tra su ton tai va lay gia tri
    var_dump($check);

    function validateEmailInput($str)
    {
        $pattern = "/^[A-Za-z0-9]+@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
        if (preg_match($pattern, $str)) {
            echo "hop ly";
        } else {
            echo "no";
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
    <label>Input: </label>
    <input type="text" name="checkMail">


    <button type="submit" name="check" value="mail" onclick="return alert('<?php validateEmailInput($checkMail);?>')">Check</button>

    <br>
    <div>
        <?php if (isset($check)): ?>
            <input type="text" value="<?php validateEmailInput($checkMail); ?>">
        <?php endif; ?>
    </div>

</form>
</body>
</html>
