<?php


class ReverseStack
{
    public $stack = [];
    public $arrayReverse = [];

    public function __construct()
    {
    }

    public function addElementStack($data)
    {
        return array_push($this->stack, $data);
    }

    public function popElementStack()
    {
        return array_shift($this->stack);
    }

    public function addArrayReverse($data)
    {
        return array_push($this->arrayReverse, $data);
    }
    public function countStack(){
        return count($this->stack);
    }
}