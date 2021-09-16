<?php
//srediti namespace
    class trougao implements geometrijskoTelo{

        protected $a;
        protected $b;
        protected $c;
        protected $ha;

        public function __construct($a, $b, $c, $ha){

            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
            $this->ha = $ha;
        }

        public function izracunajPovrsinu(){

            return ($this->a * $this->ha) / 3;
        }

        public function izracunajObim(){

           return ($this->a + $this->b + $this->c) / 2;
        }
    }
?>