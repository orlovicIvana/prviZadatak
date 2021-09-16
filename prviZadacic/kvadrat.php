<?php
//srediti namespace
    class kvadrat implements geometrijskoTelo{

        private $a = 2;

        public function __construct($a){

            $this->a = $a;
        }

        public function izracunajPovrsinu(){

            return $this->a * $this->a;
        }

        public function izracunajObim(){

            return 4 * $this->a;
        }
    }
?>