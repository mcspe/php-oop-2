<?php
  require_once __DIR__ . '/Product.php';

  class Food extends Product {
    private $ageTarget;
    private $subcategory;

    /**
     * @var String $_subcategory
     */
    function __construct($_category, $_brand, $_name, $_price, $_topVisibility, $_subcategory) {
      parent::__construct($_category, $_brand, $_name, $_price, $_topVisibility);
      $this->setSubcategory($_subcategory);
    }

    public function setSubcategory($_subcategory){
      $this->subcategory = $_subcategory;
    }

    public function getSubcategory(){
      return $this->subcategory;
    }

    public function setAgeTarget($_ageTarget){
      $this->ageTarget = $_ageTarget;
    }

    public function getAgeTarget(){
      return $this->ageTarget;
    }
  }