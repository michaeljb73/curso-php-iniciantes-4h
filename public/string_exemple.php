<?php

$myString = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type 
specimen book. It has survived not only five centuries, but also the leap into
electronic typesetting, remaining essentially unchanged. It was popularised in
the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
, and more recently with desktop publishing software like Aldus PageMaker 
including versions of Lorem Ipsum.\n";

// $name = 'Michael';

// echo strlen($myString);

// // Sintaxe heredoc
// echo <<<END
// \n
//       a
//      b
//     c

// END;

// $values = [<<<END
// a
// b
// c
// END, 'd e f'];
// var_dump($values);

// echo "Meu nome é {$name}\n";
// echo "Meu nome é $name";

echo "Trecho de uma string com substr(): ".substr($myString,0,30);
echo "\nVerifica se string está contida str_contais(): ".str_contains($myString,'simply');

?>