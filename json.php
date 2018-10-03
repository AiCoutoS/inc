<?php
//Criado por Anderson Ismael
//03 de outrubro de 2018

function json($data){
    header('Content-Type: application/json');
    return json_encode($data);
}
