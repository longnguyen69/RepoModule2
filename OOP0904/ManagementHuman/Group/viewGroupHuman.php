<?php
include "../class_lib/Human.php";
include "../class_lib/HumanManager.php";
include "../class_lib/ManagerGroup.php";

$groupIndex = $_REQUEST['group'];
$humans = new HumanManager('../DataJson/dataHuman.json');
$humanGroup = new ManagerGroup($humans);
$listHumanGroup = $humanGroup->viewListHumanGroup($groupIndex);

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
<table>
    <tr>
        <th>STT</th>
        <th>Avatar</th>
        <th>Name</th>
        <th>Age</th>
        <th>Group</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php foreach ($listHumanGroup as $key => $objHuman): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><img src="<?php echo "Upload/" . $objHuman->getImage() ?>" alt="" width="100"></td>
            <td><?php echo $objHuman->getName() ?></td>
            <td><?php echo $objHuman->getAge() ?></td>
            <td><a href="#"><?php echo $objHuman->getGroup() ?></a></td>
            <td><?php echo $objHuman->getAddress() ?></td>
            <td>#</td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
