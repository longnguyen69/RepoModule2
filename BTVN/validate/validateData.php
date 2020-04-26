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

    var_dump($btnRegister);


    $newAcc = new Register($firstName,$lastName,$phone,$email,$password);
    $managerAcc = new RegisterAcc('../data/Acclist.json');
    $managerAcc->addAccount($newAcc);

}