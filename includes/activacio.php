<?php
    $token = $_GET["token"];
    var_dump($token);

    //instanciar las classes
    require "autoload.models.php";
    require "autoload.controlers.php";
   

    $newPass = new UserContr();
    $newPass->setToken($token);

    
    //ejecutar gestor de errores i crear nuevo password
    $newPass->activateAccount();

    //rederigir a la pagina de login
    header("Location: ../view/login.php?success-token");
