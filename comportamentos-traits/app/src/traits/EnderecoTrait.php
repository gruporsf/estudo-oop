<?php

namespace App\Src\Traits;

trait EnderecoTrait{

    private $endereco;

    public function getEndereco(): Endereco{

        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco): void{

        $this->endereco = $endereco;
    }
}