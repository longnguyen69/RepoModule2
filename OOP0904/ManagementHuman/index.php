<?php
include 'class_lib/Human.php';
include 'class_lib/HumanManager.php';

$humanManager = new HumanManager("DataJson/dataHuman.json");
$humans = $humanManager->listHuman();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Style/style.css"/>
</head>
<body>
<a href="StoreHuman/create.php">ADD STUDENT</a> </br>
<form action="StoreHuman/search.php" method="get">
    <input type="text" name="txtSearch" placeholder="Enter to search">
    <button type="submit">SEARCH</button>
</form>

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
    <?php foreach ($humans as $key => $human): ?> <!-- data doi tuong human trong mang humans-->
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><img src="<?php echo "Upload/" . $human->getImage() ?>" alt="" width="100"></td>
            <td><?php echo $human->getName() ?></td>
            <td><?php echo $human->getAge() ?></td>
            <td><a href="#"><?php echo $human->getGroup() ?></a></td>
            <td><?php echo $human->getAddress() ?></td>
            <td>
                <a href="StoreHuman/edit.php?index=<?php echo $key ?>">Edit</a>
                <a onclick="return confirm('Are you sure Delete?')"
                   href="StoreHuman/delete.php?index=<?php echo $key ?>">Del</a>
                <a href="StoreHuman/detail.php?index=<?php echo $key ?>">Detail</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
