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
    <!-- <link rel="stylesheet" type="text/css" href="Style/style.css"/> -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!--<form action="StoreHuman/search.php" method="get">
    <input type="text" name="txtSearch" placeholder="Enter to search">
    <button type="submit">SEARCH</button>
</form>-->
<div class="container">

    <a class="btn btn-primary" href="StoreHuman/create.php" role="button">ADD HUMAN</a>
    <div class="col-12">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Group</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($humans as $key => $human): ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><img src="<?php echo "Upload/" . $human->getImage() ?>" alt="" width="70"></td>
                    <td><?php echo $human->getName() ?></td>
                    <td><?php echo $human->getAge() ?></td>
                    <td>
                        <a href="Group/viewGroupHuman.php?group=<?php echo $human->getGroup() ?>"><?php echo $human->getGroup() ?></a>
                    </td>
                    <td><?php echo $human->getAddress() ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-info" onclick="window.location.href='StoreHuman/edit.php?index=<?php echo $key ?>'">Edit</button>
                        <button type="button" class="btn btn-outline-info" onclick="window.location.href='StoreHuman/detail.php?index=<?php echo $key ?>'">Detail</button>
                        <button type="button" class="btn btn-outline-dark" onclick="return confirm('Are you sure Delete?')" href="StoreHuman/delete.php?index=<?php echo $key ?>">Del</button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!--  jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 Popper JS
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 Latest compiled JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
