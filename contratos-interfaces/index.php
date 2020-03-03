<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Src\Contratos\Usuario;
use App\Src\Contratos\UsuarioAdmin;
use App\Src\Contratos\Login;

$usuario = new Usuario('Ricardo', 'Ferreira', 'email@dominio.com');

echo "<pre>";
    var_dump($usuario);
echo "</pre>";

$usuarioAdmin = new UsuarioAdmin('Administrador', 'Adm Geral', 'email@dominio.com');

echo "<pre>";
    var_dump($usuarioAdmin);
echo "</pre>";

$login = new Login();

$loginUsuario = $login->loginUsuario($usuario);
$loginAdmin = $login->loginAdmin($usuarioAdmin);

echo "<pre>";
    var_dump($loginUsuario, $loginAdmin);
echo "</pre>";

//Dependencia
echo "<pre>";
    var_dump(
        $login->login($usuario),
        $login->login($usuario)->getNome(),
        $login->login($usuarioAdmin),
        $login->login($usuarioAdmin)->getNome()
    );
echo "</pre>";