<?php
    
    class Animals{

        public $name;
        public $color;

        //constructor
        // public function __construct(){
        //     $this->name = "aung net";
        //     $this->color = "black";

        // }
        public function __construct($name="default animal",$color="default color"){
            $this->name = $name;
            $this->color = $color;

        }
        public function sleep(){
            echo "I am sleeping";
        }
    }
    class Dog extends Animals{

        public function greeting(){
            echo "Dog is greeting";
        }
    }
    // $dog =new Animals();
    // // $dog =new Animals('Shwe War',"yellow");

    // echo $dog->name;
    // echo $dog->color;

    // $dog = new Dog();
    $dog = new Dog("I am Dog","My color is black");
    $dog->greeting();

    $animal = new Animals();
    $animal->sleep();

    $dog->sleep();
    
    echo $dog->name;
    echo $dog->color;
?>