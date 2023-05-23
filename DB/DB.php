<?php
  require_once __DIR__ . '/../models/Food.php';
  require_once __DIR__ . '/../models/Toys.php';
  require_once __DIR__ . '/../models/Beds.php';

  $topVisibilityProduct = [
    new Food('dog', 'Monge', 'Natural SuperPremium Chicken', 5, true, 'food'),
    new Food('dog', 'Monge', 'Natural SuperPremium Salmon', 7, true, 'food'),
    new Food('cat', 'Monge', 'Kitten Trota', 8, true, 'food'),
    new Food('cat', 'Oasy', 'Kitten Trota', 7.5, true, 'food'),
    new Toys('dog', 'PetPlay', 'Toy1', 11, true, 'toy'),
    new Toys('dog', 'PetPlay', 'Toy2', 9, true, 'toy'),
    new Toys('cat', 'PetPlay', 'Toy1', 13, true, 'toy'),
    new Toys('cat', 'PetPlay', 'Toy2', 15, true, 'toy'),
    new Beds('dog', 'PetHome', 'Rest1', 18, true, 'home'),
    new Beds('dog', 'PetHome', 'Rest2', 45, true, 'home'),
    new Beds('cat', 'PetHome', 'Rest3', 16, true, 'home'),
    new Beds('cat', 'PetHome', 'Rest4', 13, true, 'home')
  ];

  foreach ($topVisibilityProduct as $key => $product) {
    $index = ($key%2) ? '2' : '1';
    $pic = $product->getCategory() . '-' . $product->getSubcategory() . '-' . $index . '.jpg';
    $product->setPicture($pic);
  }