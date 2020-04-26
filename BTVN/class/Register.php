<?php
include "../interface/inter.php";


class Register implements RegisterAccount
{
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $email;
    public $password;

    public function __construct($firstName, $lastName, $phoneNumber, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPhone()
    {
        return $this->phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}