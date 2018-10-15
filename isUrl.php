<?php
//Anderson Ismael
//15 de outubro de 2018

function isUrl($url){
    if(filter_var($url, FILTER_VALIDATE_URL){
        return $url;
    }else{
        return false;
    }
}
