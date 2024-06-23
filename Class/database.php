<?php

class Database{
    private $db = null;
    public $error = false;

    //konstruktor
    public function __construct($host, $username, $password, $database)
    {
        try {
            $this -> db = new mysqli($host, $username, $password, $database);
            $this -> db -> set_charset("utf8");
        } catch (Exception $ex) {
            $this -> error = true;
            echo '<p>Hiba az adatbázishoz csatlakozás során!</p>' .$ex->getMessage();
            exit();
        }
    }

    //SQL lekérdezések előkészítése
    public function prepare($sql){
        if ($this->db) {    //ha él a kapcsolat az adatbázissal
            return $this->db->prepare($sql);
        }
        else{   //ha nem
            throw new Exception("Nincs kapcsolat az adatbázissal!");
        }
    }

    //kategóriák lekérdezése
    public function getOsszesKategoria(){
        $result = $this->db->query("SELECT * FROM `kategoriak`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}