<?php

class connect extends credentials{
    public $conn;
    function __construct(){
        parent::__construct();
        try{
            $this->conn = new PDO($this->getDriver().":host=".$this->host.";dbname=".$this->db, $this->getUser(), $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            $this->conn = array(
                "driver" => $this->getDriver(),
                "host" => $this->host,
                "user" => $this->getUser(),
                "password" => $this->pass,
                "database" => $this->db,
                "menssage" => $e->getMessage()
            );
        }
    }
}
?>