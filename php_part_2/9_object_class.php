<?php
 

    class Car{
        //properties
        // public $name = "Moe Min Thway";
        // public $price = "1500$";
        // public $name  ;
        private $name  ;
        public $price ;


        //methods
        public function getCarName($userName="default"){ //type
            $this->name= $userName;
            return $this->name;
        }
        public function getCarPrice($userPrice=0){ //void
            $this->price= $userPrice;
            echo $this->price;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name = "default"){
             $this->name =$name;
        }
    }
    $result = new Car();
    // echo $result->getCarName("BMW")."<br>";
    // echo $result->getCarPrice("15000$")."<br>";
   //echo $result->getCarName()."<br>";
   // echo $result->getCarPrice()."<br>";
    // echo $result->name."<br>";
    // echo $result->price."<br>";

    //type methods
    // $name =  $result->getCarName('ABC')."<br>";
    // echo $name;

    //private
    $result->setName("ABCDEF");
    
    $name = $result->getName();
    echo  $name;
 


?>