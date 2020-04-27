<?php
if (isset($_SERVER['REQUEST_METHOD']) == 'POST'){
    include "../class/Register.php";
    include "../class/RegisterAcc.php";

    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $btnRegister = $_REQUEST['register'];

    function checkName($name)
    {
        $pattern = "/^[A-Za-z]+$/";
        if (preg_match($pattern, $name)) {
            return true;
        } else {
            return false;
        }
    }

    function checkPhone($phone)
    {
        $pattern = "/^[0-9]{10}$/";
        if (preg_match($pattern, $phone)) {
            return true;
        } else {
            return false;
        }
    }

    function checkEmail($email)
    {
        $pattern = "/^[A-Za-z0-9]+@[A-Za-z0-9]+(\.[A-Za-z]+)$/";
        if (preg_match($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    }

    function checkPassword($password)
    {
        $pattern = "/^[A-Za-z0-9]{8,20}$/";
        if (preg_match($pattern, $password)) {
            return true;
        } else {
            return false;
        }
    }

    var_dump(checkName($firstName));
    var_dump(checkName($lastName));
    var_dump(checkPhone($phone));
    var_dump(checkEmail($email));
    var_dump(checkPassword($password));
    if (checkName($firstName) == true && checkName($lastName) == true && checkPhone($phone) ==true &&
        checkEmail($email) ==true && checkPassword($password) == true){

        $newAcc = new Register($firstName,$lastName,$phone,$email,$password);
        $managerAcc = new RegisterAcc('../account.json');
        $managerAcc->addAccount($newAcc);
        echo "Register success";
    } else {
        echo "wrong account format";
    }
}