<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Discount Calculator</title>
<head>
</head>
<body>
<h2>Product Discount Calculator</h2>
<table style="border: 1px solid black">
    <tr>
        <td>Product Description:</td>
        <td><?php
            if (isset($_POST['btTinh']))
            echo $_POST['description'];
            ?>
        </td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><?php
            if (isset($_POST['btTinh']))
                echo '$' . $_POST['price'];
            ?>
        </td>
    </tr>
    <tr>
        <td>Discount Percent:</td>
        <td><?php
            if (isset($_POST['btTinh']))
                echo $_POST['percent'] . '%';
            ?>
        </td>
    </tr>
    <tr>
        <td>Discount Amount:</td>
        <td><?php
            if (isset($_POST['btTinh']))
                echo $_POST['percent'] * $_POST['price'] * 0.1;
            ?>
        </td>
    </tr>
    <tr>
        <td>Discount Price:</td>
        <td><?php
            if (isset($_POST['btTinh']))
                echo $_POST['price'] + $_POST['percent'] * $_POST['price'] * 0.1;
            ?>
        </td>
    </tr>
</table>
</body>
</html>