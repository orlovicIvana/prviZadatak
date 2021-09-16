<?php
    class kvadrat extends geometrijskoTelo{

        private $a = 2;

        public function izracunajPovrsinu(){

            return $this->a * $this->a;
        }

        public function izracunajObim(){

            return 4 * $this->a;
        }
    }
?>