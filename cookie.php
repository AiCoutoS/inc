<?php
//Anderson Ismael
//15 de outubro de 2018

function getCookie($cookieName){
    if(isset($_COOKIE[$cookieName])){
        return $_COOKIE[$cookieName];
    }else{
        return false;
    }
}

function newCookie($name,$value,$expiration=0){
    setcookie($name, $value, $expiration,'/');
}
