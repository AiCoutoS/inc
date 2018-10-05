<?php
//Criado por Anderson Ismael
//05 de outrubro de 2018

function getLocation($url){
    return @get_headers($url,true)['Location'];
}
