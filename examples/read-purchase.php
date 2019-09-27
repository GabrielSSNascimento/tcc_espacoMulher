<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Purchase;

$purchase = new Purchase();
$list = $purchase->find()->fetch(true);

var_dump($list);

foreach($list as $purchaseItem) {
    var_dump($purchaseItem->data());
    foreach ($purchaseItem->items() as $item) {
        var_dump($item->data());
    }
}

