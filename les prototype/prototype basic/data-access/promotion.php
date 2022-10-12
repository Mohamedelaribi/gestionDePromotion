<?php

    class Promotion{

        public $idPromotion;
        public $namePromotion;


        function   __construct($idPromotion,$namePromotion){
            $this->idPromotion = $idPromotion;
            $this->namePromotion = $namePromotion;
        }

        function  getId(){
            return $this->idPromotion;
        }
        function  getname(){
            return $this->namePromotion;
        }
    }



?>