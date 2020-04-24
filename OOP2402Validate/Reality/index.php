<?php
function checkUperkey($str){
    $strUp = "/^[A-Z]/";
    if (preg_match($strUp, $str)){
        return "Yes";
    } else {
        return "No";
    }
}
var_dump(checkUperkey("Nguyen A"));
var_dump(checkUperkey("nguyen A"));
var_dump(checkUperkey("Nguyen b"));
