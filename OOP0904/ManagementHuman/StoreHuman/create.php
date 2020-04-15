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
<form action="storeHuman.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="userName"/></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="text" name="age" placeholder="Age"/></td>
        </tr>
        <tr>
            <td>Group:</td>
            <td>
                <select name="group">
                    <option selected="selected">GG0220H2</option>
                    <option>GG0320G3</option>
                    <option>GG0420I1</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" placeholder="Address"/></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="avatar"/></td>
        </tr>
        <tr>
            <td>Describe:</td>
            <td><textarea rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="create" value="ADD HUMAN"/></td>
        </tr>
    </table>
</form>

</body>
</html>
