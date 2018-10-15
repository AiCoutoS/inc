<?php
//Criado por Anderson Ismael
//05 de outubro de 2018

use Medoo\Medoo;

function db(){
    create_db_if_not_exists();
    return new Medoo([
        // required
        'database_type' => $_ENV['DB_TYPE'],
        'database_name' => $_ENV['DB_NAME'],
        'server' => $_ENV['DB_SERVER'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]);
}

function create_db_if_not_exists(){
    $link = mysqli_connect($_ENV['DB_SERVER'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    $db_selected = mysqli_select_db($link,$_ENV['DB_NAME']);
    if ($db_selected){
        if(isCli()){
            print 'conectado ao banco de dados '.$_ENV['DB_NAME'].PHP_EOL;
        }
    }else{
        $sql = 'CREATE DATABASE '.$_ENV['DB_NAME'];
        $result=mysqli_query($link,$sql);
        if(isCli()){
            if($result){
                print 'banco de dados '.$_ENV['DB_NAME'].' criado com sucesso'.PHP_EOL;
                print 'conectado ao banco de dados '.$_ENV['DB_NAME'].PHP_EOL;
            }else{
                print 'erro ao criar o banco de dados '.$_ENV['DB_NAME'].PHP_EOL;
            }
        }
    }
    mysqli_close($link);
}
