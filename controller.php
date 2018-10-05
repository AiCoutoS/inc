<?php
//Criado por Anderson Ismael
//24 de agosto de 2018

function controller($name,$data=null){
    $str=ROOT.'controller/'.$name.'.php';
    if(file_exists($str)){
        if(is_array($data)){
            extract($data);
        }
        require_once($str);
    }else{
        die('<b>erro</b><br>Controller '.$name.' não encontrado');
    }
}
