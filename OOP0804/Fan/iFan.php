<?php
define('SLOW', 1);
define('MEDIUM', 2);
define('FAST', 3);

class iFan
{

    private $speed = 1;
    private $on = false;
    private $radius = 5;
    private $color = blue;

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setOn($on)
    {
        $this->on = $on;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->getOn()) {
            return $this->getColor() . ' ' . $this->getRadius() . ' ' . 'fan is off';

        } else {
            return $this->getSpeed() . '' . $this->getColor() . ' ' . $this->getRadius() . ' ' . 'fan in on';
        }
    }
}