<?php

    include 'databasePromotion.php';
    include 'promotion.php';


    class InsertData extends ConnectToDatabase{

        public function addtData(){
            
            $insert = "INSERT INTO promotion (namePromotion) VALUES("$this->namePromotion")";

            mysqli_query($this->connecte(),$insert)

        }
    }



?>