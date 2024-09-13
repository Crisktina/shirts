<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['userID'])) {

    // recoger datos del formulario
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $userfullname = $_POST["userfullname"];

    //recoger id user de session
    $userId = $_SESSION['userID'];


    //instanciar las classes
    require "autoload.models.php";
    require "autoload.controlers.php";

    if (isset($_POST["update_nickname"])) {
        //modificar bd
        $modify = new UserContr();
        $modify->setusername($username);
        $modify->updateNickname($userId);

        //datos para almacenar en sessión
        $session = new UserContr($username);
        $usarioAllData = $session->idUser();
        newSession($usarioAllData);

        //Volver a la pagina
        header("Location: ../view/profile.php?success=nickname");
    }

    if (isset($_POST["update_email"])) {
        // modificar bd
        $modify = new UserContr();
        $modify->setEmail($email);
        $modify->updateEmail($userId);

        //datos para almacenar en sessión
        $session = new UserContr($email);
        $usarioAllData = $session->idUser();
        newSession($usarioAllData);

        //Volver a la pagina
        header("Location: ../view/profile.php?success=email");
    }

    if (isset($_POST["update_fullname"])) {
        //modificar bd
        $modify = new UserContr();
        $modify->setUserfullname($userfullname);
        $modify->updateFullname($userId);

        //datos para almacenar en sessión
        $session = new UserContr($userfullname);
        $usarioAllData = $session->idUser();
        newSession($usarioAllData);

        //Volver a la pagina
        header("Location: ../view/profile.php?success=userfullname");
    }
}

function newSession($usarioAllData)
{

    foreach ($usarioAllData as $usuario) {
        // regenera el token de la session perpetua por defecto
        session_regenerate_id();

        // almacenar usuario en la session 
        session_start();
        $_SESSION['userID'] = $usuario['user_id'];
        $_SESSION['username'] = $usuario['user_nickname'];
        $_SESSION['userfullname'] = $usuario['user_fullname'];
        $_SESSION['usermail'] = $usuario['user_mail'];
    }
}
