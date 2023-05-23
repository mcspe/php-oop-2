<?php
  require_once __DIR__ . '/Product.php';

  class Toys extends Product {
    private $subcategory;

    /**
     * @var String $_subcategory
     */
    function __construct($_brand, $_name, $_price, $_topVisibility, $_subcategory) {
      parent::__construct($_brand, $_name, $_price, $_topVisibility);
      $this->setSubcategory($_subcategory);
    }

    public function setSubcategory($_subcategory){
      $this->subcategory = $_subcategory;
    }

    public function getSubcategory(){
      return $this->subcategory;
    }
  }