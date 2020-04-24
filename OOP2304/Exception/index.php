<?php
include "DivideByZeroException.php";

function divide($number, $divisor){
    try {
        if ($divisor !== 0){
            return $number / $divisor;
        } else {
            throw new DivideByZeroException("Can't divide zero");
        }
    } catch (DivideByZeroException $msg){
        echo $msg->getMessage();
    }
}
divide(10,0);