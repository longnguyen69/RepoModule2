<?php
include '../class_lib/Human.php';
include '../class_lib/HumanManager.php';

$humanManager = new HumanManager("../DataJson/dataHuman.json");
$index = $_GET['index']; //chỉ số phần tử
$human = $humanManager->getHumanByIndex($index);

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
<form action="update.php?index=<?php echo $index ?>" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $human->getName() ?>"></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="text" name="age" value=" <?php echo $human->getAge() ?>"></td>
        </tr>
        <tr>
            <td>Group:</td>
            <td>
                <select name="group">
                    <option>GG0220H2</option>
                    <option>GG0320G3</option>
                    <option>GG0420I1</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" value=" <?php echo $human->getAddress() ?>"></td>
        </tr>
        <tr>
            <td>Avatar:</td>
            <td><input type="file" name="avatar"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="update" value="UPDATE HUMAN"></td>
        </tr>
    </table>
</form>
</body>
</html>
