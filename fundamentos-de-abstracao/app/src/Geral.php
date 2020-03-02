<?php

namespace App\Src;

class Geral{

    public static function converterMoedaReal($valor){

        return number_format($valor, 2, ",", ".");
    }
}