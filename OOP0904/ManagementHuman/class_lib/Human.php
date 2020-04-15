<?php


class Human
{
    protected $name;
    protected $age;
    protected $address;
    protected $image;
    protected $group;

    public function __construct($name, $age, $group, $address, $image)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
        $this->address = $address;
        $this->image = $image;

    }
// name
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
// tuoi
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
// address
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
// group
    public function setGroup($group)
    {
        $this->group = $group;
    }

    public function getGroup()
    {
        return $this->group;
    }
// avatar
    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }
}