<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
</head>
<body>
<?php
if (isset($_REQUEST['cd'])){
    $valueAmount = (int)$_POST['valueAmount'];
    $rateAmount = (float)$_POST['rateAmount'];
    $totalAmount = $valueAmount + ($valueAmount * $rateAmount);
}

?>
<form method="post">
    <h2>Future Value Calculator</h2>
    <table style="border: 1px solid black">
        <tr>
            <td>Investment Amount:</td>
            <td><input type="text" name="valueAmount" value="<?php echo $valueAmount ?>"/></td>
        </tr>
        <tr>
            <td>Yearly Interest Rate:</td>
            <td><input type="text" name="rateAmount" value="<?php echo $rateAmount ?>"/></td>
        </tr>
        <tr>
            <td>Number of Years:</td>
            <td><input type="text" name="totalAmount" value="<?php echo $totalAmount ?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="cd" value="Tính"></td>
        </tr>
    </table>
</form>

</body>
</html>