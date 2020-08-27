<?php

session_start();

class Database{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'movie_review';
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbName);


        if($this->conn == TRUE){
            return $this->conn;
        }else{
            die('connection failed: '.$this->conn->connect_error);
        }
    }




}

?>