<?php


class Geometry implements Colorable

{
    public function howToColor()
    {
        // TODO: Implement howToColor() method.
        return 'Color all four sides.';
    }


    public function areaCircle($circle){
        return $circle->getRadius() * $circle->getRadius() * pi();
    }

}