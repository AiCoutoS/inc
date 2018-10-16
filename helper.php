<?php
//Criado por Anderson Ismael
//16 de outubro de 2018

function helper($name,$data=null){
    $str=ROOT.'helper/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        require_once($str);
    }else{
        die('<b>Erro:</b><br>'.PHP_EOL.'<br>Helper <b>'.$name.'</b> não encontrado'.PHP_EOL);
    }
}
