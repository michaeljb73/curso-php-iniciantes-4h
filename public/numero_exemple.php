<?php

// $number = 34;
// $number = '34';
$isNumber = (int) '34'; // Conversão explícita (cast)
$number = 'João';

// echo $number + 30; // é inválido

if (is_numeric($number)) {
    echo $number + 30;
} else {
    echo 'Valor não numérico';
}

echo "\n".gettype($isNumber);

/**
 * Referencias:
 * https://www.php.net/manual/pt_BR/language.types.integer.php
 * https://www.php.net/manual/pt_BR/language.types.float.php
 * https://www.php.net/manual/pt_BR/language.types.type-juggling.php
 */

?>