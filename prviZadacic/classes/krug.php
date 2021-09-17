<?php

namespace classes;
use interfaces\geometrijskoTelo;


    class krug implements geometrijskoTelo{

        private $r;

        public function __construct($r){

            $this->r = $r;
        }

        public function izracunajPovrsinu(){

            return $this->r * $this->r * pi();
        }

        public function izracunajObim(){
            return 2 * pi() * $this->r;
        }
    }
?>