<?php
//Criado por Anderson Ismael
//28 de agosto de 2018

function slug($text,$set=true){
    if($set){
        $text=str_replace(' ', '_', $text);
    }else{
        $text=str_replace('_', ' ', $text);
    }
    return $text;
}
?>
