<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Item extends DataLayer
{

  public function __construct()
  {
     //string $entity, array $required, string $primary = 'id', bool $timestamps = true
     //parent::__construct("users", ["first_name", "last_name"], "id", true);
     parent::__construct("items", ["purchase_id", "product_id","amount"],"id",false); // na tabela já está o padrao "id" e timestamp "true", então não preciso colocar


  }

  // Relacionamento muitos pra muitos (lógica minha)

    public function add(Purchase $purchase, Product $product, int $amount): Item
    {
        $this->purchase_id = $purchase->id;
        $this->product_id = $product->id;
        $this->amount = $amount;
        return $this;
    }

    public function product()
    {
        return (new Product())->find("id = :uid", "uid={$this->product_id}")->fetch(true);
    }


}