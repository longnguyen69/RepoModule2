<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $classInput = $_REQUEST['className'];
        $checkClassInput  = $_REQUEST['btnCheck'];
        var_dump($checkClassInput);
        function checkClassName($in){
            $pattern = "/^[ACP]{1}[0-9]{4}[GHIKLM]{1}$/";
            if (preg_match($pattern,$in)){
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
<form method="post">
    <label>Class Name: </label>
    <input type="text" name="className" value="<?php echo $classInput?>">
    <button type="submit" name="btnCheck" value="checkClass">Check</button>
    <?php
    if (isset($checkClassInput)){
        checkClassName($classInput);
    }
    ?>
</form>
</body>
</html>
