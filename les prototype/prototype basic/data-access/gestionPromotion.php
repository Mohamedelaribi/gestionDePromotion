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


        public function selectById($updateId){
            
            $selectId = "SELECT * FROM promotion WHERE idPromotion ='$updateId'";
            $idResult = mysqli_query($this->connecte(),$selectId);

            if($idResult-> num_rows == 1){
                return $idResult;
            }
        }


        public function updatePromotion($promotionUpdate){
            $update = "UPDATE `promotion` SET `namePromotion`='$promotionUpdate[namePromotion]' WHERE `idPromotion`='$promotionUpdate[idPropmotion]'";
            $updateRsult = mysqli_query($this->connecte(),$update);

        }
    }


?>