<?php
include '../2D/Draw2D.php';

class Draw3D extends Draw2D
{
    protected $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }
    public function getXY()
    {
        $arr = [];
        array_push($arr,$this->x);
        array_push($arr,$this->y);
        array_push($arr,$this->z);
        return $arr;
    }
}