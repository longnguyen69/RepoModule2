<?php


class MyList
{
    public $arrayList;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function addElement($data)
    {
        array_push($this->arrayList, $data);
        return $this->arrayList;
    }

    public function sizeArrayList()
    {
        return count($this->arrayList);
    }

    public function getElement($index)
    {
        if ($index < $this->sizeArrayList()) {
            return $this->arrayList[$index];
        } else {
            exit("No Content Display");
        }
    }
    public function getArrayList(){
        foreach ($this->arrayList as $key=>$value){
            if ($key < $this->sizeArrayList()){
                echo $value . ', ';
            }
        }
    }

    public function removeElement($index)
    {
        if ($index < $this->sizeArrayList()) {
            return array_splice($this->arrayList, $index, 1);
        } else {
            exit("No Content Display");
        }
    }

    public function editElement($data, $index)
    {
        if ($index < $this->sizeArrayList()){
            $this->arrayList[$index] = $data;
            return $this->arrayList;
        }
    }
    public function insertElement($data, $index){
        if ($index <= $this->sizeArrayList()){
            return array_splice($this->arrayList, $index, 0 , $data);
        }else{
            exit("Over Allowed Limit");
        }
    }
}