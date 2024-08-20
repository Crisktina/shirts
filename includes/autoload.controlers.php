<?php 
spl_autoload_register("myAutoLoadControler");

function myAutoLoadControler($classname){
    $extension = ".php";
    $fromView = "";
    $path = "controller/";
    
if(str_contains($_SERVER['REQUEST_URI'], 'view')|| str_contains($_SERVER['REQUEST_URI'], 'includes')){
    $fromView = "../";
} 
$fullpath = $fromView.$path.$classname.$extension;

    if(!file_exists($fullpath)){
        return false;
    }

    require $fullpath;
}

