<?php
    require('animal.php');
    $sheep = new Animal("shaun");

    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 2
    echo $sheep->cold_blooded; // false

?>