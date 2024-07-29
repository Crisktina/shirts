<?php 
spl_autoload_register("myAutoLoadControler");

function myAutoLoadControler($classname){
    $extension = ".php";
    $path = "../controller/";
    $fullpath = $path.$classname.$extension;

    if(!file_exists($fullpath)){
        return false;
    }

    require $fullpath;
}

