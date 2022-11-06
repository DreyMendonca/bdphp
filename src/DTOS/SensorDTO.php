<?php

namespace App\DTOS;

class SensorDTO{
    
    public $_temperatura;
    public $_umidade;

    function __construct($_temperatura, $_umidade){
        $this-> _temperatura = $_temperatura;
        $this->_umidade = $_umidade;
    }
}