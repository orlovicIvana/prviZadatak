<?php
    class krug implements geometrijskoTelo{

        private $r = 3;

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