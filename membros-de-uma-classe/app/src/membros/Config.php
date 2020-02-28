<?php

namespace App\Src\Membros;

class Config{

    //Constantes
    public const EMPRESA = "Minha Empresa";
    protected const DOMINIO = "site.com.br";
    private const SETOR = "Educação";

    //Atributos - Propriedades
    //Por se static ela são membros da classe e não do objeto
    public static $empresa;
    public static $dominio;
    public static $setor;

    public static function setConfig($empresa, $dominio, $setor){

        //Para acessar membros da classe usa-se self e não $this
        self::$empresa = $empresa;
        self::$dominio = $dominio;
        self::$setor = $setor;
    }
}