<?php


class QueueSymmetry
{
    protected $arr = [];
    public function __construct()
    {
    }

    function addQueue($value)
    {
        return array_push($this->arr, $value);
    }

    function popQueue()
    {
        return array_shift($this->arr);
    }
}