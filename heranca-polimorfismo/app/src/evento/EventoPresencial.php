<?php

namespace App\Src\Evento;

use App\Src\Endereco\Endereco;

class EventoPresencial extends Evento{

    /**
     * @var Endereco
     */
    private $endereco;

    public function __construct($evento, \DateTime $data, $valor, $vagas, Endereco $endereco){

        parent::__construct($evento, $data, $valor, $vagas);
        
        $this->endereco = $endereco;
    }

    /**
     * @return Endereco
     */
    public function getEndereco(): getEndereco{

        return $this->endereco;
    }
}