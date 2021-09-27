<?php
namespace MyApp\Model;

class Korisnik{

    public function __construct()
    {

    }

    public function Kreiraj(Array $p)
    {
        $q="INSERT INTO ".$this->table. " (Ime,Prezime,Email) VALUES (:ime, :prezime, :email)";

        try{
            $stmt=$this->conn->prepare($q);
            print_r($stmt);
            $stmt->bindParam(":ime",$p["Ime"]);
            $stmt->bindParam(":prezime",$p["Prezime"]);
            $stmt->bindParam(":email",$p["Email"]);
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
        $q="UPDATE ".$this->table." SET Ime= :Ime,Prezime= :Prezime,Email= :Email WHERE ID= :ID";
        try{
            $stmt=$this->conn->prepare($q);
            $stmt->bindParam(":Ime",$p["Ime"]);
            $stmt->bindParam(":Prezime",$p["Prezime"]);
            $stmt->bindParam(":Email",$p["Email"]);
            $stmt->bindParam(":ID",$id);
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
} 

?>