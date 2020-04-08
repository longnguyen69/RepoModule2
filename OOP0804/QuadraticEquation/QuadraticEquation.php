<?php


class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDiscriminant()
    {

        $delta = pow($this->a, 2) - (4 * $this->a * $this->c);
        return $delta;
    }

    public function getRoot1($delta)
    {
        $root1 = (-$this->b + sqrt($delta)) / (2 * $this->a);
        return $root1;
    }

    public function getRoot2($delta)
    {
        $root2 = (-$this->b - sqrt($delta)) / (2 * $this->a);
        return $root2;
    }

}