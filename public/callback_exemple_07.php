<?php

function teste($name, $age) {
    return "Olá meu nome é $name e tenho $age anos";
}

echo call_user_func_array('teste',['Michael',50]);