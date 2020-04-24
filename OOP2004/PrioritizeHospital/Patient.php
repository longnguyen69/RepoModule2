<?php


class Patient
{
    public $name;
    public $code;
    public function __construct($name, $code)
    {
        $this->code = $code;
        $this->name = $name;
    }
}