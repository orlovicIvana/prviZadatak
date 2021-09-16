<?php
    class pravougaonik extends geometrijskoTelo{

        private $a = 2;
        private $b = 3;

        public function izracunajPovrsinu(){

            return $this->a * $this->b;
        }

        public function izracunajObim(){
            $obim = 2 * $this->a + 2 * $this->b;
            return $obim;
        }
    }
?>