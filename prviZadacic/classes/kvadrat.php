<?php
//srediti namespace
//namespace prviZadacic\classes;
//namespace geoTela;
//use prviZadacic\interfaces\geometrijskoTelo;
require 'interfaces/geometrijskoTelo.php';

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