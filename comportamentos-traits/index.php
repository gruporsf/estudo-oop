<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Src\Traits\Usuario;
use App\Src\Traits\Endereco;
use App\Src\Traits\Registrar;

$usuario = new Usuario('Ricardo', 'Ferreira', 'email@dominio.com');

$endereco = new Endereco('Rua João Pessoa', '25', 'Casa 10', 'Gonzaga', 'Santos', 'SP', '11013-100');

$registrar = new Registrar($usuario, $endereco);

echo "<pre>";
    var_dump(
        $registrar,
        $registrar->getUsuario()->getNome(),
        $registrar->getEndereco()->getBairro()
    );
echo "</pre>";