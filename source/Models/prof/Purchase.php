<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Purchase extends DataLayer
{

  public function __construct()
  {
     //string $entity, array $required, string $primary = 'id', bool $timestamps = true
     //parent::__construct("users", ["first_name", "last_name"], "id", true);
     parent::__construct("purchases", ["user_id", "total_price"]); // na tabela já está o padrao "id" e timestamp "true", então não preciso colocar


  }




    public function add(User $user, float $totalPrice): Purchase
    {
        $this->user_id = $user->id;
        $this->total_price = $totalPrice;

        return $this;
    }

    // Cada purchase(compra) que deve saber quais são seus items
    public function items()
    {
        return (new Item())->find("purchase_id = :uid", "uid={$this->id}")->fetch(true);
    }


}