<?php
  class Product {
    private $picture;
    private $brand;
    private $name;
    private $price;
    private $category;

    function __construct($_brand, $_name, $_price){
      $this->setBrand($_brand);
      $this->setName($_name);
      $this->setPrice($_price);
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
  }