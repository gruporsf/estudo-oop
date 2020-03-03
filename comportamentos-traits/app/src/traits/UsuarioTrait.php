<?php

namespace App\Src\Traits;

trait UsuarioTrait{

    private $usuario;

    public function getUsuario(): Usuario{

        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void{

        $this->usuario = $usuario;
    }
}