<?php

// $_SESSION -> Vriável de ambiente

// $_SESSION['logged'] = true;

// $_SESSION['logged'] = 'asdf'; // valor truthy

// if($_SESSION['logged']) {
//     echo 'está logado !';
// }

// for($i = 0; $i <= 10; $i++) {
//     echo $i.',';
// }

// $name = 'Michael';
$name = !!'Michael';
$age = 38;
$logged = false;

// if ($name && $age > 18 && $logged === true) {
//     echo 'é verdadeiro';
// } else {
//     echo 'é falso';
// }


if ($name && $age > 18 && !$logged) {
    echo 'é verdadeiro';
} else {
    echo 'é falso';
}

?>