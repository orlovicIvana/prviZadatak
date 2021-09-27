<?php
namespace MyApp\Model;

class Grupa{
    protected $table = "grupe";

    public function __construct($db){
        $this->conn = $db;
    }

    public  function Kreiraj(Array $p){
        $q="INSERT INTO ".$this->table. " (Naziv) VALUES (:naziv )";
        
        try{
            $stmt=$this->conn->prepare($q);
            print_r($stmt);
            $stmt->bindParam(":naziv",$p["Naziv"]);
            $stmt->execute();

            return $stmt;
        }catch(\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function Procitaj()
    {
         $q="SELECT * FROM ".$this->table ."WHERE ID=:ID";

        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":ID",$id);
            $stmt->execute();

            return $stmt;

            }catch(\PDOException $e){
                exit($e->getMessage());
            }
    }

    public function ProcitajSve(){
        $q="SELECT * FROM ".$this->table;

        try{
            $stmt=$this->conn->prepare($q);
            $stmt->execute();

            return $stmt;

        }catch(\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function Izmeni($id, Array $p){
        $q="UPDATE ".$this->table." SET Naziv= :naziv WHERE ID= :id";
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":naziv",$p["Naziv"]);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
        
            return $stmt;
        }catch(\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function Obrisi($id){
        $q="DELETE FROM ".$this->table." WHERE ID= :ID";
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":ID",$id);
            $stmt->execute();
            return $stmt;
        }catch(\PDOException $e){
            exit($e->getMessage());
        }
    }

    public function Izlistaj()
    {
         $q="SELECT g.Naziv as NazivGrupe, m.Ime as ImeMentora, m.Prezime as PrezimeMentora, m.Email as EmailMentora,
         p.Ime as ImePraktikanta, p.Prezime as PrezimePraktikanta, p.Email as EmailPraktikanta
         FROM grupe g
         INNER JOIN mentori m
         ON g.ID = m.idGrupe
         INNER JOIN praktikanti p
         ON g.ID = p.idGrupe;";

        try{
            $stmt=$this->conn->prepare($q);
            $stmt->execute();

            return $stmt;

            }catch(\PDOException $e){
                exit($e->getMessage());
            }
    }

}
?>