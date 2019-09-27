<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{

  public function __construct()
  {
     //string $entity, array $required, string $primary = 'id', bool $timestamps = true
     //parent::__construct("users", ["first_name", "last_name"], "id", true);
     parent::__construct("users", ["first_name", "last_name"]); // na tabela já está o padrao "id" e timestamp "true", então não preciso colocar


  }
  // Após criar a classe Address.php continua...
  // ligação das tabelas
  
  public function addresses()
  {
     return (new Address())->find("user_id = :uid", "uid={$this->id}")->fetch(true);
  }

  // Lógica minha

    public function purchases()
    {
        return (new Purchase())->find("user_id = :uid", "uid={$this->id}")->fetch(true);
    }


}