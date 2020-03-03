<?php

namespace App\Src;

use App\Src\Usuario;
use App\Src\Geral;

abstract class Conta{

    protected $agencia;
    protected $conta;
    protected $cliente;
    protected $saldo;

    protected function __construct($agencia, $conta, Usuario $cliente, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->cliente = $cliente;
        $this->saldo = $saldo;
    }

    public function extrato(){

        echo "<p>Extrato: Saldo atual ".Geral::converterMoedaReal($this->saldo)."</p>";
    }

    //Por serem metodos abstratos as classes filhas precisam implementar esses metodos
    abstract public function depositar($valor);

    abstract public function retirar($valor);
}