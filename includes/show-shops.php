<?php 
require "autoload.models.php";
require "autoload.controlers.php";

$objeto = new ShopContr();
$allShops = $objeto->allShopsList();

?>