<?php
//Criado por Anderson Ismael
//05 de outrubro de 2018

function getHeaderLocation($url){
    $header=get_headers($url,true);
    if(isset($headers['Location'])){
        return $header['Location'];
    }else{
        return $url;
    }
}
