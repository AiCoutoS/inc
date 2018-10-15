<?php
//Criado por Anderson Ismael
//15 de outubro de 2018

function getMethod(){
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        return 'POST';
    }else{
        return 'GET';
    }
}
