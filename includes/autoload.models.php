<?php 
spl_autoload_register("myAutoLoadModel");

function myAutoLoadModel($classname){
    $extension = ".php";
    $fromView = "";
    $path = "model/";

    if(str_contains($_SERVER['REQUEST_URI'], 'view') || str_contains($_SERVER['REQUEST_URI'], 'includes')){
        $fromView = "../";
    } 
    $fullpath = $fromView.$path.$classname.$extension;

    if(!file_exists($fullpath)){
        return false;
    }

    require $fullpath;
}