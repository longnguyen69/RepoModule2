<?php
include "Note.php";

class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data){
        $link = new Note($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == NULL){
            $this->lastNode = $link;
        }
        $this->count++;
    }
    public function insertLast($data){
        if ($this->firstNode !== NULL){
            $link = new Note($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes(){
        return $this->count;
    }
    public function readList(){
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL){
            array_push($listData,$current->readNote());
            $current =$current->next;
        }
        return $listData;
    }
}