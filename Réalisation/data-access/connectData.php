<?php

class ConnectToDatabase{
    private $host;
    private $user;
    private $password;
    private $dataName;

    public function connecte(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->dataName = 'gestionpromotion';
        
        $connect = new mysqli($this->host, $this->user, $this->password, $this->dataName);

        return $connect;
    }
}



?>