<?php
//Anderson Ismael
//16 de outubro de 2018
function getToken($limit=11,$type='ans'){
    $a='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $n='0123456789';
    $s='_-';
    switch ($type) {
        case 'a':
        $characters=$a;
        break;
        case 'an':
        $characters=$a.$n;
        break;
        case 'ans':
        $characters=$a.$n.$s;
        break;
        default:
        $characters=$a.$n.$s;
        break;
    }
    $uuid = '';
    for ($i = 0; $i < $limit; $i++) {
        $uuid .= $characters[rand(0, mb_strlen($characters)-1)];
    }
    return $uuid;
}
