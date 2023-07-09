<?php

function teste($name) {
    return 'Olá meu nome é '.$name."\n";
}

function teste2($callback) {

    if(is_callable($callback)) {
        return $callback('Michael');
    } else {
        return "não é um callback\n";
    }
}

$user = 'João';
$user_ = 'teste';

echo teste2($user); // Inválido. Callback só recebe cmo parâmetro funções.
echo teste2($user_);
echo teste2('teste');

