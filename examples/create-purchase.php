<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Item;
use Source\Models\Product;
use Source\Models\Purchase;
use Source\Models\User;




$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($product, $qtd) use (&$myCart){
    $myCart["product"][]= $product;
    $myCart["id"][] = $product->id;
    $myCart["qtd"][]= $qtd;
    $myCart[$product->name_product] = $qtd * $product->price_product;
    $myCart["totalPrice"] += $myCart[$product->name_product];
};


// https://github.com/robsonvleite/datalayer


$user = new User();
$user->id = 1;

$idProduct = 3;
$qtdProduct = 2;

$productModel = new Product();
$product = $productModel->findById($idProduct);

$cardAdd($product,$qtdProduct);

$idProduct = 4;
$qtdProduct = 3;

$productModel = new Product();
$product = $productModel->findById($idProduct);

$cardAdd($product,$qtdProduct);



var_dump($myCart);

echo "----------------------------<br>";


$i = 0;

while($i < count($myCart["id"]) ){
    echo "ID: ", $myCart["id"][$i] . "  QTD: ", $myCart["qtd"][$i] . "<br>";
    $i++;
}

//$_SESSION["SessionCart"] = $myCart;


/* Funcionado perfeitamente já cadastrando no banco

// Criando a compra (pedido)
$purchase = new Purchase();

$purchase->add($user,$myCart["totalPrice"]);
$purchase->save();

var_dump($purchase);


// adicionando os items
$i = 0;
while($i < count($myCart["id"])){
$item = new Item();
$item->add($purchase, $myCart["product"][$i],$myCart["qtd"][$i]);
$item->save();

    $i++;
}


var_dump($item);

*/

