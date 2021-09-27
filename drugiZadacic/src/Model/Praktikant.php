<?php
namespace MyApp\Model;
use MyApp\Model\Korisnik as Korisnik;

class Praktikant extends Korisnik{


    function __construct()
    {
        parent::__construct();
        $this->table="praktikanti";
       // $this->conn=$db;
       echo "praktikant";
    }

}
?>