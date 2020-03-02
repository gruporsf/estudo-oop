<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Src\User;
use App\Src\ContaPoupanca;
use App\Src\ContaCorrente;

//Constantes
$ricardo = new User('Ricardo', 'Ferreira');

$contaPoupanca = new ContaPoupanca('2237', '88', $ricardo, 0);

$contaPoupanca->extrato();

$contaPoupanca->depositar(1000);

$contaPoupanca->extrato();

$contaPoupanca->retirar(1500);
$contaPoupanca->retirar(1000);
$contaPoupanca->extrato();
$contaPoupanca->retirar(6);
$contaPoupanca->extrato();

echo '<pre>';
    var_dump($contaPoupanca);
echo '</pre>';

$contaCorrente = new ContaCorrente('2237', '1008', $ricardo, 1000, 1000);

$contaCorrente->depositar(1000);

$contaCorrente->extrato();

$contaCorrente->retirar(2000);
$contaCorrente->extrato();

$contaCorrente->retirar(500);
$contaCorrente->extrato();

echo '<pre>';
    var_dump($contaCorrente);
echo '</pre>';