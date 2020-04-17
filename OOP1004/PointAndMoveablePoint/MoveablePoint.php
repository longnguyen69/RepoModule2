<?php
include 'Point.php';

class MoveablePoint extends Point
{
    public $xSpeed = 1;
    public $ySpeed = 1;

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function moveSpeed($xSpeed, $ySpeed){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
    }
    public function getXYSpeed(){
        $arr = [];
        array_push($arr,$this->x);
        array_push($arr,$this->y);
        return $arr;
    }
}