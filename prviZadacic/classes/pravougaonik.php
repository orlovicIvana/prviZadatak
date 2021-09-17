<?php
//srediti namespace
//namespace prviZadacic\classes;
//namespace geoTela;

//use prviZadacic\interfaces\geometrijskoTelo;
require 'interfaces/geometrijskoTelo.php';

    class pravougaonik implements geometrijskoTelo{

        private $a;
        private $b;

        public function __construct($a, $b){

            $this->a = $a;
            $this->b = $b;

        }

        public function izracunajPovrsinu(){

            return $this->a * $this->b;
        }

        public function izracunajObim(){
            $obim = 2 * $this->a + 2 * $this->b;
            return $obim;
        }
    }
?>