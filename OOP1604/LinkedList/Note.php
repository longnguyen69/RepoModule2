<?php


class Note
{
public $data;
public $next;
public function __construct($data)
{
    $this->data = $data;
    $this->next = NULL;
}
function readNote(){
    return $this->data;
}

}