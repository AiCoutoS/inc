<?php
//Criado por Anderson Ismael
//08 de outrubro de 2018

require '../vendor/autoload.php';

$incFiles=glob(__DIR__.'/*.php');
foreach($incFiles as $incFile){
    require_once $incFile;
}
