<?php
    class trougao extends geometrijskoTelo{

        protected $a = 2;
        protected $b = 3;
        protected $c = 4;
        protected $ha = 5;

        public function izracunajPovrsinu(){

            return ($this->$a * $this->$ha) / 3;
        }

        public function izracunajObim(){

           return ($this->$a + $this->$b + $this->$c) / 2;
        }
    }
?>