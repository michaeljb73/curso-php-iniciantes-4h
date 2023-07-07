<?php

$isAdmin = true;
$number1 = 70;
$number2 = 50;

$resultado = $number1 > $number2 && $isAdmin;
$resultado2 = $number1 > $number2 && 'true' == true;
$resultado3 = $number1 > $number2 && 'true' === true;

echo ($resultado) ? 'é verdadeiro'.PHP_EOL : 'não é verdadeiro'.PHP_EOL;
echo ($resultado2."\n") ? "é verdadeiro\n" : "não é verdadeiro\n";
echo ($resultado3) ? 'é verdadeiro' : 'não é verdadeiro';

/*
if($isAdmin) {
    echo 'isAdmin';
}

if($resultado) {
    echo 'É verdadeiro !';
} else {
    echo 'Não é vedadeiro';
}
*/

/*
if($resultado) {
    echo 'É verdadeiro !';
    return;
}

echo 'Não é vedadeiro';
*/

?>