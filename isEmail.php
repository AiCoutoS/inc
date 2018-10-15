<?php
function isEmail($email){
    $email=trim(mb_strtolower($email));
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    }else{
        return false;
    }
}
