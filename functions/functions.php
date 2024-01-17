<?php

function getPassword ($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+';
    $pass = '';
    $charactersLen = strlen($characters); 
    
    for ($i = 0; $i < $length; $i++) {
        $pass .= $characters[rand(0, $charactersLen - 1)];
    }
    return $pass;
}