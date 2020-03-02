<?php

namespace App\Src;

use App\Src\User;
use App\Src\Geral;

class ContaPoupanca extends Conta{

    private $taxa;

    public function __construct($agencia, $conta, User $cliente, $saldo){

        parent::__construct($agencia, $conta, $cliente, $saldo);

        $this->taxa = 0.006;
    }

    public function depositar($valor){
        $this->saldo = $valor + ($valor * $this->taxa);

        echo "<p>Deposito de R$ ".Geral::converterMoedaReal($valor)." realizado com sucesso.</p>";
    }

    public function retirar($valor){

        if($this->saldo >= $valor){
            
            $this->saldo -= abs($valor);

            echo "<p>Saque de R$ ".Geral::converterMoedaReal($valor)." realizado com sucesso</p>";
        }
        else{
            echo "<p>Saldo insuficiente, você tem R$ ".Geral::converterMoedaReal($this->saldo)."</p>";
        }
    }
}