<?php 
require "autoload.models.php";
require "autoload.controlers.php";

$objeto = new ProductContr();
$allShirts = $objeto->allShirtsList();

$objeto = new ProductContr();
$allTotebags = $objeto->allTotebagsList();

?>