<?php 

$names = ['Alexandre','Maria','João'];

foreach($names as $key => $name) {
    print("Key: $key; Value: $name\n");
}

foreach($names as $name) {
    print("Value: $name\n");
}

?>