<?php

namespace App\Src\Evento;

class EventoOnline extends Evento{

    private $link;

    public function __construct($evento, \DateTime $data, $valor, $link, $vagas = null){

        parent::__construct($evento, $data, $valor, $vagas);

        $this->link = $link;
    }

    //Mesma assinatura da classe pai o que caracteriza o Polimorfismo
    public function registrar($nome, $email){

        $this->vagas += 1;

        $this->setRegistro($nome, $email);

        echo "<p>{$nome} você foi registrado no evento online com sucesso</p>";
    }

    public function getLink(){

        return $this->link;
    }
}