<?php
//Criado por Anderson Ismael
//24 de agosto de 2018

function controller($name){
  $str=ROOT.'controller/'.$name.'.php';
  if(file_exists($str)){
    require $str;
  }else{
    die('<b>erro</b><br>Controller '.$name.' não encontrado');
  }
}
