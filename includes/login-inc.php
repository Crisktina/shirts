<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $username = $_POST["uid"];
    $password = $_POST["pwd"];


    require "autoload.models.php";
    require "autoload.controlers.php";
    
        //traer datos para almacenar en sessión

        $session = new UserContr($username, $password);
        $usarioAllData = $session->idUser();
    
        foreach ($usarioAllData as $usuario) {
            // regenera el token de la session perpetua por defecto
            session_regenerate_id();
                            
            // almacenar usuario en la session 
            session_start();
            $_SESSION['username'] = $usuario['user_nickname'];
            $_SESSION['userID'] = $usuario['user_id'];
            
        }
        
        
    
        $login = new UserContr($username, $password);
        $login->loginUser();
    
       
    
        //Volver a la pagina inicial
        header("Location: ../index.php?succes-login");

}


