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



}