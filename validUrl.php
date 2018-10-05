<?php
//Criado por Anderson Ismael
//05 de outubro de 2018

function validUrl($url){
    if(filter_var($url, FILTER_VALIDATE_URL)){
        return true;
    }else{
        return false;
    }
}
