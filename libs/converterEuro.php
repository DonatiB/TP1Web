<?php

class ConverterEuro{
    
    function __construct()
    {
        
    }

    function converterDollar($euro){
        $dollar = 1.6 * $euro;
        return $dollar;
    }
    function converterPeso($euro){
        $peso = 115.50 * $euro;
        return $peso;
    }
    function converterYen($euro){
        $yen = 129.76 * $euro;
        return $yen;
    }
}