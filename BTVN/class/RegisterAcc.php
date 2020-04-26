<?php


class RegisterAcc
{
    public $listAccount = [];
    public $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function addAccount($acc)
    {
        $dataAcc = [
            'firstName' => $acc->getFirstName(),
            'lastName' => $acc->getLastName(),
            'phone' => $acc->getPhone(),
            'email' => $acc->getEmail(),
            'password' => $acc->getPassword()
        ];
        $data = $this->getAccountJson();
        array_push($data, $dataAcc);
        $this->saveAccountJson($data);
    }

    public function listAcc()
    {
        $accountAll = $this->getAccountJson();
        foreach ($accountAll as $obj) {
            $account = new Register($obj->firstName, $obj->lastName, $obj->phone, $obj->email, $obj->password);
            array_push($this->listAccount, $account);
        }
        return $this->listAccount;
    }

    public function getAccountJson()
    {
        $arrAccount = file_get_contents($this->filePath);
        return json_decode($arrAccount);
    }

    public function saveAccountJson($data)
    {
        $dataAcc = json_encode($data);
        return file_put_contents($this->filePath, $dataAcc);
    }

    function checkName($name)
    {
        $pattern = "/^[A-Za-z]$/";
        if (preg_match($pattern, $name)) {
            return $name;
        } else {
            echo "The name only consists of letters";
        }
    }

    function checkPhone($phone)
    {
        $pattern = "/^[0-9]{10}$/";
        if (preg_match($pattern, $phone)) {
            return $phone;
        } else {
            echo "Phone numbers include only digits";
        }
    }

    function checkEmail($email)
    {
        $pattern = "/^[A-Za-z0-9]+@[A-Za-z0-9]+(\.[A-Za-z]+)$/";
        if (preg_match($pattern, $email)) {
            return $email;
        } else {
            echo "Email invalidate";
        }
    }

    function checkPassword($password)
    {
        $pattern = "/^[A-Za-z0-9]{8,20}$/";
        if (preg_match($pattern, $password)) {
            return $password;
        } else {
            echo "Password incorrect format";
        }
    }

}