<?php
class credentials{   
    function __construct(private $driver="mysql", protected $host="localhost", private $user="root", protected $pass="", protected $db="db_hunter"){}
    public function setDriver($driver){
        $this->driver=$driver;
    }
    public function setHost($host){
        $this->host=$host;
    }
    public function setUser($user){
        $this->user=$user;
    }
    public function setPass($pass){
        $this->pass=$pass;
    }
    public function setDb($db){
        $this->db=$db;
    }
    public function getDriver(){
        return $this->driver;
    }
    public function getHost(){
        return $this->host;
    }
    public function getUser(){
        return $this->user;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getDb(){
        return $this->db;
    }
} 
?>