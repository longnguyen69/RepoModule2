<?php


class StackSetup
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->stack =  [];
        $this->limit = $limit;
    }

    public function insertStack($data)
    {
        if (count($this->stack) < $this->limit) {
            return array_unshift($this->stack, $data);
        } else
            return exit("Stack overflow memory");
    }

    public function removeStartStack()
    {
        if ($this->isEmpty()) {
            return array_shift($this->stack);
        } else
            return exit("No element to delete");
    }

    public function topStack()
    {
        return current($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
}