<?php

Class Database
{
    private $con;
    function __construct(){
        
        $this->con=$this->connect();
    }
    private function connect(){
        $string="mysql:host=localhost;mychat_db";
        try
        {
            $connection=new PDO($string,DBUSER,DBPASS);//host name,username,password
            return $connection;
        }catch(PDOException $e)
        {
            echo $e->getMessage();
            die;
        }
        return true;

        
    }
}
$myclass =new Database();