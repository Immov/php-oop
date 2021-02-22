<?php
    require('animal.php');
    require('Ape.php');
    require("Frog.php");
    $sheep = new Animal("shaun");

    echo $sheep->name; // "shaun"
    echo $sheep->legs; // 2
    echo $sheep->cold_blooded; // false

    $sungokong = new Ape("kera sakti");
    $sungokong->yell(); // "Auooo"
    $kodok = new Frog("buduk");
    $kodok->jump() ; // "hop hop"

?>