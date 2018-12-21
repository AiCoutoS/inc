<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($names){
    if(is_array($names)){
        foreach($names as $name){
            openModel($name);
        }
    }else{
        openModel($names);
    }
}

function openModel($name){
    $str=ROOT.'model/'.$name.'.php';
    if(file_exists($str)){
        require_once($str);
    }else{
        die('<b>Erro:</b><br>'.PHP_EOL.'<br>Model <b>'.$name.'</b> não encontrado'.PHP_EOL);
    }
}
