<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Pedro";
$user->last_name = "Leite";
$user->genre = "M";
$user->email = "pedro@gmail.com";
$user->document = "2336541-2";
$user->save();

// Exemplo de como fazer a abstração do relacionamento
/*$addr = new Address();
$addr->add($user, "Nome da rua", "22b");
$addr->save();
*/


var_dump($user);
