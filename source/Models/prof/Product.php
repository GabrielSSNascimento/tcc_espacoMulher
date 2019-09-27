<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer
{

  public function __construct()
  {
     //string $entity, array $required, string $primary = 'id', bool $timestamps = true
     //parent::__construct("users", ["first_name", "last_name"], "id", true);
     parent::__construct("products", ["cod_product", "price_product","name_product"]); // na tabela já está o padrao "id" e timestamp "true", então não preciso colocar


  }

}