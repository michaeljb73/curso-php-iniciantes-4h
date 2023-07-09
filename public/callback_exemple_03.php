<?php

function teste($name) {
    return "Olá, meu nome é $name\n";
}

echo call_user_func('teste', 'Michael ');