<?php 

class Database{
    protected $db;

    public function __construct()
    {
        try {
            $this->db= new PDO('mysql:host=localhost;dbname=mvc','root','');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}