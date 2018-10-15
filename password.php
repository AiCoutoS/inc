<?php
//Anderson Ismael
//15 de outubro de 2018

function passwordHash($password){
    return password_hash($password,PASSWORD_DEFAULT);
}

function passwordVerify($password,$hash){
    return password_verify($password,$hash);
}
