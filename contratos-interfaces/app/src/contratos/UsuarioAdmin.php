<?php

namespace App\Src\Contratos;

class UsuarioAdmin extends Usuario implements UsuarioInterface, UsuarioErroInterface{

    private $erro;
    private $nivel;

    public function __construct($nome, $sobrenome, $email){

        parent::__construct($nome, $sobrenome, $email);

        $this->nivel = 10;
    }

    public function setErro($erro):void {

        $this->erro = $erro;
    }

    public function getErro(){

        return $this->erro;
    }
}