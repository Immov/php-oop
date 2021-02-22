<?php
    class Ape{
        public $name;
        public $legs = 4;
        public $cold_blooded = 'false';
        public function __construct($name){
            $this->name = $name;
        }
        public function yell(){
            echo "Auooo";
        }
    }
?>