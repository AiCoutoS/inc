<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name,$data=null){
    $str=ROOT.'model/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        require_once($str);
    }else{
        die('<b>Erro:</b><br>'.PHP_EOL.'<br>Model <b>'.$name.'</b> não encontrado'.PHP_EOL);
    }
}
