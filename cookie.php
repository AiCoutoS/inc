<?php
//Anderson Ismael
//15 de outubro de 2018

function getCookie($name){
    if(isset($_COOKIE['name'])){
        return $_COOKIE['name'];
    }else{
        return false;
    }
}

function setCookie($name,$value,$expiration){
    setcookie($name, $value, $expiration,'/');
}
