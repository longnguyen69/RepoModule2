<?php

class ComparatorCircle implements Comparator
{

    public function ComparatorRate($circleOne, $circleTwo)
    {
        // TODO: Implement ComparatorRate() method.

        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo){
            return 1;
        } elseif ($radiusOne < $radiusTwo){
            return -1;
        } else {
            return 0;
        }
    }
}