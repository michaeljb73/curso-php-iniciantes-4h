<?php
// Falsy:
// null     - null
// 0.0      - float
// 0        - integer
// "0"      - string
// ""       - empty string
// arry()   - [] empty array

// Truthy: O resto

var_dump(!!null);
var_dump(!!0.0);
var_dump(!!"0");
var_dump(!!"");
var_dump(!![]);

if(!0) {
    echo 'Teste';
}

?>