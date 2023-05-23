<?php
  class Product {
    private $picture;
    private $brand;
    private $name;
    private $price;
    private $category;
    private $topVisibility;

    /**
     * @var String $_brand, 
     * @var String @$_name,
     * @var Int @$_price,
     * @var Boolean @$_topVisibility
    */
    function __construct($_brand, $_name, $_price, $_topVisibility){
      $this->setBrand($_brand);
      $this->setName($_name);
      $this->setPrice($_price);
      $this->setVisibility($_topVisibility);
    }

    public function setBrand($_brand){
      $this->brand = $_brand;
    }

    public function getBrand(){
      return $this->brand;
    }

    public function setName($_name){
      $this->name = $_name;
    }
    
    public function getName(){
      return $this->name;
    }
    
    public function setPrice($_price){
      $this->price = $_price;
    }
    
    public function getPrice(){
      return $this->price;
    }

    public function setPicture($_picture){
      $this->picture = $_picture;
    }
    
    public function getPicture(){
      return $this->picture;
    }

    public function setCategory($_category){
      $this->category = $_category;
    }
    
    public function getCategory(){
      return $this->category;
    }

    public function setVisibility($_topVisibility){
      $this->topVisibility = $_topVisibility;
    }
    
    public function getVisibility(){
      return $this->topVisibility;
    }
  }