<?php


class StackSymmetry implements StackInterface
{
    protected $arr = [];

    public function __construct()
    {
    }

    public function addStringToStack($element)
    {
        return array_push($this->arr, $element);
    }

    public function popStack()
    {
        return array_pop($this->arr);
    }
}