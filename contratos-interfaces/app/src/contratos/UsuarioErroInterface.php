<?php

namespace App\Src\Contratos;

interface UsuarioErroInterface{

    public function setErro($erro);

    public function getErro();
}