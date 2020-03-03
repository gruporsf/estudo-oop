<?php

namespace App\Src;

use App\Src\Usuario;
use App\Src\Geral;

class ContaCorrente extends Conta{

    private $limite;

    public function __construct($agencia, $conta, Usuario $cliente, $saldo, $limite){

        parent::__construct($agencia, $conta, $cliente, $saldo);

        $this->limite = $limite;
    }

    public function depositar($valor){
        $this->saldo += $valor;

        echo "<p>Deposito de R$ ".Geral::converterMoedaReal($valor)." realizado com sucesso.</p>";
    }

    public function retirar($valor){

        if($valor <= $this->saldo + $this->limite){
            
            $this->saldo -= abs($valor);

            echo "<p>Saque de R$ ".Geral::converterMoedaReal($valor)." realizado com sucesso</p>";

            //Se o saldo for negativo, cobra taxa
            if($this->saldo < 0){
                $taxa = abs($this->saldo) * 0.006;

                $this->saldo -= $taxa;

                echo "<p>Taxa de uso de limite ".Geral::converterMoedaReal($taxa)."</p>";
            }
        }
        else{

            $saldo = $this->saldo + $this->limite;

            echo "<p>Saldo insuficiente, você tem R$ ".Geral::converterMoedaReal($saldo)."</p>";
        }
    }
}