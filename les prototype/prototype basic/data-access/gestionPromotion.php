<?php

    include 'databaseConnection.php';
    include 'promotion.php';


    class GestionPromotion extends ConnectToDatabase{

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


        public function selectById($promotion){
            $selectId = "SELECT * FROM promotion WHERE idPromotion ='$promotion'";
            $idResult = mysqli_query($this->connecte(),$selectId);

            if($idResult-> num_rows == 1){
                return $idResult;
            }
        }


        public function updatePromotion($promotion){    
            $getId = $promotion->getId();
            $getName = $promotion->getname();
            $update = "UPDATE `promotion` SET `namePromotion`='$getName' WHERE `idPromotion`='$getId'";
            mysqli_query($this->connecte(),$update);

        }

        public function delet($promotion){
            $delet = "DELETE FROM promotion WHERE `idPromotion`='$promotion'";
            mysqli_query($this->connecte(),$delet);
        }
    }





?>