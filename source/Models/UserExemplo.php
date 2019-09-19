<?php

namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {

        //Parametros necessários para utilização do DataLayer
        //string $entity, array $required, string $primary = 'id', bool $timestarps = true
        //Se nao for ID, colocar como obrigatorio

        parent::__construct("users", ["first_name", "last_name"]);
        // na tabela users já está padrao o id e timestamps true, logo nao preciso colocar as informações aqui no construtor
        
    }
    public function addresses()
    {
        return (new Address())->find("user_id= :uid", "uid={$this->id}")->fetch(true);
    }

}
