<?php

// Arrays

$names = array('Alexandre','Maria','João');
$names2 = ['Alexandre','Maria','João'];
$data = ['Alexandre','Maria','João',38,true];
$data2 = ['Alexandre',38,true,false];
$person = [
    'name' => 'Alexandre',
    'age'  => 38,
    'documents' => [
        'cpf'  => '6549873110',
        'rg'   => '543232'
    ]
];
$length = count($data2);

// print_r($data);
// var_dump($data);

var_dump($data[0]);

echo "Tamanho do array: ".$length."\n";
$data2[$length] = 'last';
array_push($data2,'last last'); // Adiciona no final
array_unshift($data2,'first'); // Adiciona no início

print_r($data2);
print_r($person);
print_r($person['name']);
print("\n");
var_dump($person['documents']);


/**
 * Referencias: https://www.youtube.com/watch?v=mRogW0vMJuI&t=5032s
 * https://www.php.net/manual/pt_BR/language.types.array.php
 * https://www.php.net/manual/pt_BR/function.print-r.php
 */

?>