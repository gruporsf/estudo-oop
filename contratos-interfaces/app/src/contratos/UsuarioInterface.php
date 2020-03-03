<?php

namespace App\Src\Contratos;

interface UsuarioInterface{

    //public function __construct($nome, $sobrenome, $email);

    //public function setEmail($email);

    public function getNome();

    public function getSobrenome();

    public function getEmail();
}