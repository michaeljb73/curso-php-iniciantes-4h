<?php

class User {

    public static function teste2($name, $age) {
        return "Olá, meu nome é $name e tenho $age anos.\n";
    }

    public function teste($name, $age) {
        return "Olá, meu nome é $name e tenho $age anos.\n";
    }
}


$user = new User;

echo call_user_func([$user,'teste'], 'Michael', 50);

// Métodos estáticos não precisam ter a classe instanciada.
echo call_user_func(['User','teste2'], 'Jackson', 50);