<?php

namespace App\Src;

class Usuario{

    private $nome;
    private $sobrenome;

    public function __construct($nome, $sobrenome){

        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNome(){

        return $this->nome;
    }

    public function getSobrenome(){

        return $this->sobrenome;
    }
}