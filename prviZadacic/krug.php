<?php
    class krug extends geometrijskoTelo{

        private $r = 3;

        public function izracunajPovrsinu(){

            return $this->r * $this->r * pi();
        }

        public function izracunajObim(){
            return 2 * pi() * $this->r;
        }
    }
?>