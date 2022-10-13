<?php

    class Promotion{

        private $idPromotion;
        private $namePromotion;


        function   __construct($idPromotion,$namePromotion){
            $this->idPromotion = $idPromotion;
            $this->namePromotion = $namePromotion;
        }

        public function  getId(){
            return $this->idPromotion;
        }

        public function  getname(){
            return $this->namePromotion;
        }
    }



?>