<?php
function loadJSON($fileName){
    $jsonData = file_get_contents($fileName);
    $jsonArr = json_decode($jsonData);
    return $jsonArr;
}
function saveJSON($filename, $name, $email, $phone){
    try {
        $contact = [
            'name'=>$name,
            'mail'=>$email,
            'phone'=>$phone
        ];
        $arrData = loadJSON($filename);
        array_push($arrData, $contact);
        $dataJson = json_encode($arrData);

        file_put_contents($filename, $dataJson);

        echo 'Save Complete';
    }
    catch (Exception $e){
        echo 'Error' , $e ->getMessage();
    }
}

if (isset($_POST['submit'])){
    $name = $_POST['userName'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];

    if (empty($name)){
        echo 'User name not empty';
    }
    if (empty($email)){
        echo 'Email not empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){  //kiểm tra tính hợp lệ của em
        echo 'Invalid email';
        }
    if (empty($phone)){
        echo 'Phone not empty';
    }
    saveJSON('user.json', $name, $email, $phone);
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
    <table>
        <tr>
            <td>UserName: </td>
            <td><input type="text" name="userName"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="mail" placeholder="abc@gmail.com"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Register"></td>
        </tr>
    </table>
</form>
<?php
$showJson = loadJSON('user.json');
?>
<h2>Registration list</h2>
<table border="1px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($showJson as $key=>$value): ?>
        <tr>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['mail'] ?></td>
            <td><?php echo $value['phone'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>