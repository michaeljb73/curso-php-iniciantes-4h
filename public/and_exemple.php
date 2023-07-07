<?php 
/**
 * Precedência de poeradores.
 */
$isAdmin = true;
$myAccount = false;

$result = $isAdmin and $myAccount;
$result2 = ($isAdmin and $myAccount);
$result3 = $isAdmin && $myAccount;

var_dump($result);
var_dump($result2);
var_dump($result3);

?>