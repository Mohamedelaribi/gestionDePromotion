<?php

    include 'databaseConnection.php';
    include 'promotion.php';


    class CrudPromotion extends ConnectToDatabase{

        public function addtData($promotion){
            
            $namePromotion = $promotion->getname();            

            $insert = "INSERT INTO promotion (namePromotion) VALUES('$namePromotion')";

            mysqli_query($this->connecte(),$insert);

        }


        public function selectData(){

            $select ="SELECT * FROM promotion";
            $result = mysqli_query($this->connecte(),$select);

            if($result ->num_rows > 0){
                return $result;
             }             
        }
    }



?>