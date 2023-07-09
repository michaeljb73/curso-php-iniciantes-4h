<?php

$user = function($name) {
    return 'teste: '.$name;
};

function teste($callback, $name) {
    return call_user_func($callback, $name);
}

echo teste($user, 'Michael');