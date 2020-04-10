<?php
include '../Shap/Shape.php';

class Triangle extends Shape
{
    public $side1 = 1;
    public $side2 = 1;
    public $side3 = 1;

    public function __construct($name, $side1, $side2, $side3)
    {
        parent::__construct($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    public function createTriangle(){
        if ($this->side1 + $this->side2 > $this->side3){

        }
    }

}