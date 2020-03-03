<?php

namespace App\Src\Contratos;

class Usuario implements UsuarioInterface{

    private $nome;
    private $sobrenome;
    private $email;

    public function __construct($nome, $sobrenome, $email){

        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
    }

    public function setEmail($email):void{
        $this->email = $email;
    }

    public function getNome(){

        return $this->nome;
    }

    public function getSobrenome(){

        return $this->sobrenome;
    }

    public function getEmail(){

        return $this->email;
    }
}