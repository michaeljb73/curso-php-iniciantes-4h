<?php
/**
 * A função mysql_connect() foi descontinuado.
 * Agora se usa mysqli_connect().
 *      $link = mysqli_connect("host", "user", "pass", "database");
 * Isso também vale para os outros comandos que comecem com mysql_. Devem ser mysqli_.
 * Portanto:
 *      mysqli_query($link, $query);
 */

try {
    $conn = mysqli_connect('localhost','root','159357');
    print "Conexão bem sucedida !";
} catch (\Throwable $th) {
    print "Falha na conexão:</br>";
    print $th->getMessage()."</br>";
}

/**
 * Tratando warning com um if
 */
if(isset($conn)) {
    mysqli_close($conn);
} else {
   print 'Não há conexão com do banco de dados!';
}

/**
 * Tratando Warnings.
 */

// set_error_handler(function($errno, $errstr, $errfile, $errline){
//     if($errno === E_WARNING){
//         // make it more serious than a warning so it can be caught
//         trigger_error($errstr, E_ERROR);
//         return true;
//     } else {
//         // fallback to default php error handler
//         return false;
//     }
// });

// try {
//     mysqli_close($conn);
// } catch (\Throwable $th) {
//     print 'Não há conexão com o banco de dados!';
// } finally {
//     restore_error_handler();
// }

/** END - Tratando warnings */