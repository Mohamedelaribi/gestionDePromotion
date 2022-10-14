<?php

    include "connectData.php";
    include "promotion.php";



    // create the class//
    class GestionPromotion extends ConnectToDatabase{


        // insert the promotion to datbase//
        public function insert($promotion){

            $namePromotion = $promotion->getName();

            $insert = "INSERT INTO promotion (namePromotion) VALUES ('$namePromotion')";

            mysqli_query($this->connecte(),$insert);
        }


        //select the promotion from database//
        public function select(){
            $select = "SELECT * FROM promotion";

            $result = mysqli_query($this->connecte(),$select);

            if($result->num_rows > 0){
                return $result;
            }
        }


        //select the promition where clicked//
        public function selectById($promotion){

        $selectById = "SELECT * FROM promotion WHERE idPromotion = '$promotion'";
        
        $resultById = mysqli_query($this->connecte(),$selectById);

        if($resultById->num_rows == 1){
            return $resultById;
        }
        }


        // update the promotion where clicked//
        public function update($promotion){

            $getId = $promotion->getId();
            $getName = $promotion->getName();

            $update = "UPDATE promotion SET namePromotion = '$getName' WHERE idPromotion = $getId";

            mysqli_query($this->connecte(),$update);
        }
 

        //delet the promotion where clicked//
        public function delete($promotion){

            $delet = "DELETE FROM promotion WHERE idPromotion = '$promotion'";

            mysqli_query($this->connecte(),$delet);
        }


    }







?>