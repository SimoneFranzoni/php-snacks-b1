<?php

var_dump(randomNumberArray(50,10,15));

function randomNumberArray($min, $max, $nItems){

    $newArray = [];

    if($min > $max){
        $tempMin = $min;
        $min = $max;
        $max = $tempMIn
    };

    if(($max - $min) < $nItems){
        $nItems = $max - $min; 
    };

    while(count($newArray) < $nItems){

    }
}
