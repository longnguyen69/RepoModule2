<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Discount Calculator</title>
<head>
</head>
<body>

<form method="post" action="displayPHP.php">
    <h2>Product Discount Calculator</h2>
    <table style="border: 1px solid black">
        <tr>
            <td>Product Description:</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="percent"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btTinh" value="Convert"></td>
        </tr>
    </table>
</form>

</body>
</html>
