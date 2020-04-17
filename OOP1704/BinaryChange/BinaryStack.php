<?php


class BinaryStack
{
    public $stack = [];
    public $arr = [];
    public $number;
    public $count = 0;
    public $str = '';

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function changeBinary()
    {
        do {
            $this->count = $this->number % 2;
            $this->number = ($this->number - $this->count) / 2;
            $this->addStackBinary($this->count);
        } while ($this->number > 0);
        return $this->stack;
    }

    public function addStackBinary($data)
    {
        return array_push($this->stack, $data);
    }

    public function removeStackBinary()
    {
        return array_shift($this->stack);
    }

    public function getStackBinary()
    {
        $this->changeBinary();
        for ($i = 0; $i < count($this->changeBinary()); $i++){
            array_push($this->arr, $this->removeStackBinary());
        }

        var_dump($this->arr);
        $this->str = implode($this->arr);
        return $this->str;
    }
}