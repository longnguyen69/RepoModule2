<?php


class person
{
public $name;
public $age;
public $address;

public function __construct($name, $age, $address)
{
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
}
public function getInfo(){
    return 'ten ' . $this->name . ' ' . 'tuoi' .$this->age . ' ' . 'add: ' .$this->address;
}
}