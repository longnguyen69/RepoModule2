<?php
define('SLOW',1);
define('MEDIUM',2);
define('FAST',3);

class iFan
{

    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = blue;

    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getSpeed(){
         return $this->speed;
    }
    public function setOn($on){
        $this->on = $on;
    }
    public function getOn(){
        return $this->on;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }

    public function status(){
        if (!$this->on){
            return $this->speed . $this .$this->color . $this->radius . 'fan in on';
        } else
            return $this->color . $this->radius . 'fan is off';
    }
}