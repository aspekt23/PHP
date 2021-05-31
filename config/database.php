<?php

class Database{

    // The constructor function
    public function __construct(){
        // The properties
        $this->host = "mysql.freehostia.com";
        $this->login = "petwic_main";
        $this->password = "Asdasdasd1!";
        $this->name = "petwic_main";

        // The methods

    }

    // The connect function
    public function connect(){
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->name", $this->login, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            return false;
        }

    }

    // The select function
    public function select(){

    }

}
?>
