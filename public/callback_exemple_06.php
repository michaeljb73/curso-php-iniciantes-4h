<?php

class User {

    /**
     * __invoke se comporta como um método construtor
     */

    public function __invoke() {
        return 'teste';
    }
}

$user = new User;

// echo $user();

function teste($callback) {
    return $callback();
}

echo teste($user);