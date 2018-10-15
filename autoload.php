<?php
//Criado por Anderson Ismael
//08 de outrubro de 2018

if(!defined('ROOT')){
    $root=str_replace("/inc", "/", __DIR__);
    define('ROOT',$root);
}

require ROOT.'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(ROOT);
$dotenv->load();

$incFiles=glob(__DIR__.'/*.php');
foreach($incFiles as $incFile){
    require_once $incFile;
}
