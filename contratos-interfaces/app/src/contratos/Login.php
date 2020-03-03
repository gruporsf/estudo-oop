<?php

namespace App\Src\Contratos;

use App\Src\Contratos\Usuario;
use App\Src\Contratos\UsuarioAdmin;

class Login{

    private $logado;

    /**
     * @param Usuario $usuario
     * @return Usuario
     */
    public function loginUsuario(Usuario $usuario):Usuario
    {
        $this->logado = $usuario;

        return $this->logado;
    }

    /**
     * @param UsuarioAdmin $usuario
     * @return UsuarioAdmin
     */
    public function loginAdmin(UsuarioAdmin $usuario):UsuarioAdmin
    {
        $this->logado = $usuario;

        return $this->logado;
    }

    public function login(UsuarioInterface $usuario):UsuarioInterface
    {
        $this->logado = $usuario;

        return $this->logado;
    }
}