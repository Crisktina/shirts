<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $username = $_POST["uid"];
    $password = $_POST["pwd"];
    $repeatPassword = $_POST["repeatPwd"];
    $email = $_POST["email"];
    $userfullname = $_POST["userfullname"];

    //instanciar las classes
    require "autoload.models.php";
    require "autoload.controlers.php";
    
    
    //registrar usuario
    $signup = new UserContr($username, $password, $repeatPassword, $email, $userfullname);
    $signup->signupUser();

    //Volver a la pagina inicial
    header("Location: ../view/login.php?success-register");

}