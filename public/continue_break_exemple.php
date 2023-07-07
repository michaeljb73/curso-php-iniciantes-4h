<?php 

$names = ['Alexandre','Maria','João'];

// for($i = 0; $i < count($names); $i++) {

//     // if($i === 1) {
//     //     continue; // Pula o indice 1 e continua a iteração.
//     // }

//     print($names[$i]."\n");

//     if($i === 1) {
//         break; // encerra a iteração.
//     }
// }

foreach($names as $key => $name) {
    
    // if ($key === 1) continue;

    print("Key: $key; Value: $name\n");

    if ($key === 1) break;
}

?>