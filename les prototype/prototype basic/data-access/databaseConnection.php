<?php

class ConnectToDatabase{
    private $host;
    private $user;
    private $password;
    private $databaseName;



    public  function connecte(){
        $this->host = "localhost";
        $this->user = "root";
        $this->password ="";
        $this->databaseName = "gestionpromotion";

        $connect = new mysqli($this->host,$this->user,$this->password,$this->databaseName);

        return $connect;
    }
}


?>