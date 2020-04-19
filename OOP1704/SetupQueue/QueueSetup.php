<?php


class QueueSetup
{
    protected $arr = [];
    protected $limit = 10;

    public function __construct()
    {
    }

    function enqueue($data)
    {
        if (!$this->isFull()){
            return array_push($this->arr, $data);
        } else {
            return exit("The queue is full");
        }
    }

    function dequeue()
    {
        if (!$this->isEmpty()){
            return array_shift($this->arr);
        } else {
            return exit("Queue empty");
        }
    }

    function isEmpty()
    {
        return empty($this->arr);
    }

    function isFull()
    {
        return count($this->arr) == $this->limit;
    }
}