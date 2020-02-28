<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Src\Evento\Evento;
use App\Src\Evento\EventoPresencial;
use App\Src\Evento\EventoOnline;
use App\Src\Endereco\Endereco;

$evento = new Evento('Curso PHP', new DateTime('2020-02-27 15:01:10'), 12.00, 3);

echo '<pre>';
var_dump($evento);
echo '</pre>';

$evento->registrar('Ricardo', 'ricardo@email.com');
$evento->registrar('Romeu', 'romeu@email.com');
$evento->registrar('Pedro', 'pedro@email.com');
$evento->registrar('Paulo', 'paulo@email.com');

$endereco = new Endereco('Rua Frei Vital', '12', 'ap 31', 'Embaré', 'Santos', 'SP', '11025-090');

$eventoPresencial = new EventoPresencial('Curso PHP', new DateTime('2020-02-27 15:01:10'), 12.00, 3, $endereco);

echo '<pre>';
var_dump($eventoPresencial);
echo '</pre>';

$eventoPresencial->registrar('Ricardo', 'ricardo@email.com');
$eventoPresencial->registrar('Romeu', 'romeu@email.com');
$eventoPresencial->registrar('Pedro', 'pedro@email.com');
$eventoPresencial->registrar('Paulo', 'paulo@email.com');

$endereco = new Endereco('Rua Frei Vital', '12', 'ap 31', 'Embaré', 'Santos', 'SP', '11025-090');

$eventoOnline = new EventoOnline('Curso PHP', new DateTime('2020-02-27 15:01:10'), 12.00, 'https://www.site.com.br/aovivo', 2);

echo '<pre>';
var_dump($eventoOnline);
echo '</pre>';

$eventoOnline->registrar('Ricardo', 'ricardo@email.com');
$eventoOnline->registrar('Romeu', 'romeu@email.com');
$eventoOnline->registrar('Pedro', 'pedro@email.com');
$eventoOnline->registrar('Paulo', 'paulo@email.com');