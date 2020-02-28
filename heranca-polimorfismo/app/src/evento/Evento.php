<?php

namespace App\Src\Evento;

class Evento{

    private $evento;
    private $data;
    private $valor;
    private $registro;

    //Atributo utilizado nas classes filhas por isso declarado como protected
    protected $vagas;

    public function __construct($evento, \DateTime $data, $valor, $vagas)
    {
        $this->evento = $evento;
        $this->data = $data;
        $this->valor = $valor;
        $this->vagas = $vagas;        
    }

    public function registrar($nome, $email)
    {
        if($this->vagas >= 1){

            $this->vagas -= 1;

            $this->setRegistro($nome, $email);

            echo "<p>{$nome} registrado com sucesso</p>";
        }
        else{

            echo "<p>{$nome} não há vagas para esse evento</p>";
        }
    } 

    //Usa-se :void para metodos que não retornam nenhum dado
    protected function setRegistro($nome, $email): void
    {
        $this->registro = [
            'nome' => $nome,
            'email' => $email
        ];
    }

    public function getEvento(){

        return $this->evento;
    }    

    public function getData(): \DateTime
    {

        return $this->data->format('d/m/Y H:i:s');
    }

    public function getValor(){

        return number_format($this->valor, 2, ',', '.');
    }

    public function getRegistro(){

        return $this->registro;
    }

    public function getVagas(){

        return $this->vagas;
    }
}