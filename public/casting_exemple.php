<?php

// (string)
// (boolean)
// (float)
// (integer)
// (double)
// (object)
// (array)
// intval
// floatval
// doubleval
// strval
// boolval

$name = 'Alexandre';
$number = 34.56;
$nomes = ['Alexandre', 'Maria', 'Sandra'];
$person = ['name'=>'Alexandre', 'age'=>34];

// $change = (string) $number;
// $change = (object) $nomes;
// $change = (object) $person;

// class Person {
//     private $name;

//     public function tete() {
//         return 'teste';
//     }
// }

// $person = new Person(); // É um objeto

// var_dump($change);
// var_dump($change->name);

$change = strval($number);
var_dump($change);


// Continuar em 2h e 9min.
?>