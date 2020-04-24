<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $phoneInput = $_REQUEST['phone'];
    $checkPhoneInput = $_REQUEST['btnPhone'];
    function checkPhone($phone)
    {
        $pattern = "/^\([0-9]{2}\)-\([0-9]{10}\)$/";
        if (preg_match($pattern, $phone)) {
            echo "yes";
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
<form method="get">
    <label>Phone: </label>
    <input type="text" name="phone" value="<?php echo $phoneInput ?>">
    <button type="submit" name="btnPhone" value="checkPhone">Check</button>
    <?php
    if (isset($checkPhoneInput)) {
        checkPhone($phoneInput);
    }
    ?>
</form>
</body>
</html>
