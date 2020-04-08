<?php

class PracticeRectangle
{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getPeripheral()
    {
        return ($this->width + $this->height) * 2;
    }

    function getArea()
    {
        return $this->width * $this . $this->height;
    }

    function displayProperties()
    {
        return 'Rectangle as width: ' . $this->width . ' height: ' . $this->height;
    }

    function drawRectangle()
    {
        for ($i = 0; $i < $this->width; $i++) {
            for ($j = 0; $j < $this->height; $j++) {
                echo '*';
                if ($j < $this->height) {
                    echo ' ';
                }
            }
            echo '</br>';
        }
    }
}

$rectangle = new PracticeRectangle(10, 30);
echo $rectangle->getPeripheral() . '</br>';
echo $rectangle->getArea() . '</br>';
echo $rectangle->displayProperties() . '</br>';
echo $rectangle->drawRectangle();