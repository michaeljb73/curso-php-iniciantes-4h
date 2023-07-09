<?php

// $person = function($name){
//     return $name;
// };

// var_dump($person('Michael'));

// class Person {
//     public function __invoke() {
//         return 'teste';
//     }
// }

// $person = new Person;

function teste($name) {
    $person = function() use ($name) {
        return $name;
    };

    return $person;
}

var_dump(teste('Michael')());