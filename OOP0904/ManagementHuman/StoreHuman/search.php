<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include '../class_lib/HumanManager.php';

    $keyWord = $_GET['txtSearch'];
    $managerHuman = new HumanManager('../DataJson/dataHuman.json');
    $searchHumans = $managerHuman->searchHuman($keyWord);
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
    <link rel="stylesheet" stype="text/css" href="../Style/style.css"/>
</head>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    <?php if (isset($searchHumans)): ?>

        <?php foreach ($searchHumans as $key => $std): ?> <!-- data doi tuong human trong mang humans-->
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $std->name ?></td>
                <td><?php echo $std->age ?></td>
                <td><?php echo $std->address ?></td>
                <td>
                    <a href="edit.php?index=<?php echo $key ?>">Edit</a>
                    <a onclick="return confirm('Are you sure Delete?')"
                       href="delete.php?index=<?php echo $key ?>">Del</a>
                </td>
            </tr>
        <?php endforeach; ?>

    <?php endif; ?>
</table>

</body>
</html>
