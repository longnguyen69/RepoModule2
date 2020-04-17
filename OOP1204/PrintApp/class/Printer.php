<?php


abstract class Printer
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract function makePrint($mess); // hanh dong trwu tuong in ra thong diep mess

}