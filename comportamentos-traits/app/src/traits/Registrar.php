<?php

namespace App\Src\Traits;

class Registrar{

    use UsuarioTrait;
    use EnderecoTrait;

    public function __construct(Usuario $usuario, Endereco $endereco){

        $this->setUsuario($usuario);
        $this->setEndereco($endereco);

        $this->save();
    }

    public function save(){

        $this->usuario->id = 232;
        $this->endereco->usuario_id = $this->usuario->id;
    }
}