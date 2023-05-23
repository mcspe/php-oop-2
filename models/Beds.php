<?php
  require_once __DIR__ . '/Product.php';

  class Beds extends Product {
    private $petSize;

    /**
     * @var String $_petSize
     */
    function __construct($_brand, $_name, $_price, $_topVisibility, $_petSize) {
      parent::__construct($_brand, $_name, $_price, $_topVisibility);
      $this->setPetSize($_petSize);
    }

    public function setPetSize($_petSize){
      $this->petSize = $_petSize;
    }

    public function getPetSize(){
      return $this->petSize;
    }
  }