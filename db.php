<?php
//Criado por Anderson Ismael
//05 de outubro de 2018

use Medoo\Medoo;

function db(){
    return new Medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'hb',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
}
