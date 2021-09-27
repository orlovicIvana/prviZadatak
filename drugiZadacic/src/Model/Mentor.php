<?php
namespace MyApp\Model;
use MyApp\Model\Korisnik as Korisnik;

class Mentor extends Korisnik{
    protected $table="mentori";

    function __construct()
    {
        //parent::__construct();
        $this->table="mentori";
       // $this->conn=$db;
       echo "mentor cao";
    }


}
?>