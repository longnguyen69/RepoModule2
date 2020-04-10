<?php
include 'Point.php';

class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function setX($xSpeed)
    {
        $this->x = $xSpeed;
    }

    public function setY($ySpeed)
    {
        $this->y = $ySpeed;
    }
}