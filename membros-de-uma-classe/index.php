<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Src\Membros\Config;

//Constantes
$config = new config();

echo "<p>".$config::EMPRESA."</p>";

echo "<p>".Config::EMPRESA."</p>";

echo "<p>".App\Src\Membros\Config::EMPRESA."</p>";

$reflection = new ReflectionClass(Config::class);

echo '<p>-----------Constantes--------------</p>';

echo '<pre>';
    var_dump($config, $reflection->getConstants());
echo '</pre>';

echo '<p>-----------Propriedades--------------</p>';

$config::$empresa = "Minha Nova Empresa";
$config::$dominio = "dominio.com.br";
$config::$setor = "Tecnologia";

echo '<pre>';
    var_dump($reflection->getProperties(), $reflection->getDefaultProperties());
echo '</pre>';

$config::setConfig('Coca Cola do Brasil', 'cocacola.com.br', 'Bebidas');

echo '<pre>';
    var_dump($reflection->getMethods(), $reflection->getDefaultProperties());
echo '</pre>';

Config::setConfig('Fensa do Brasil', 'fensa.com.br', 'Bebidas');

echo '<pre>';
    var_dump($reflection->getMethods(), $reflection->getDefaultProperties());
echo '</pre>';