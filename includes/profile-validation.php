<?php
//Validar inputs
$userErr = $userClassErr = $fullnErr = $fullnClassErr = $emailErr = $emailClassErr = '';

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    switch ($error) {
        case 'emptyInput':
            $userErr = $fullnErr = $emailErr = "<div class=\"invalid-feedback\">El campo está vacío.</div>";
            $userClassErr = $fullnClassErr = $emailClassErr = "is-invalid";
            break;

        case 'invalidufullname':
            $fullnErr = "<div class=\"invalid-feedback\">Ingrese un nombre con al menos 4 letras. Puede incluir hasta dos nombres adicionales, separados por espacios, y solo se permiten letras.</div>";
            $fullnClassErr = "is-invalid";
            break;

        case 'invaliduid':
            $userErr = "<div class=\"invalid-feedback\">Ingrese solo letras y/o números. No se permiten caracteres especiales ni espacios.</div>";
            $userClassErr = "is-invalid";
            break;

        case 'invalidemail':
            $emailErr = "<div class=\"invalid-feedback\">Ingrese una dirección de correo electrónico válida en el formato nombre@dominio.com</div>";
            $emailClassErr = "is-invalid";
            break;

        case 'MailTaken':
            $emailErr = "<div class=\"invalid-feedback\">El email ya existe.</div>";
            $emailClassErr =  "is-invalid";
            break;
        case 'UserTaken':
            $userErr = "<div class=\"invalid-feedback\">El usuario ya existe.</div>";
            $userClassErr = "is-invalid";
            break;

        case 'FailedStmt':
            $userErr = $fullnErr = $emailErr =  "<div class=\"invalid-feedback\">No se ha podido enviar el formulario.</div>";
            $userClassErr = $fullnClassErr = $emailClassErr =  "is-invalid";
            break;
    }
}


//mensaje de success
$successMsg = '';

if (isset($_GET['success'])) {
    $success = $_GET['success'];
    switch ($success) {
        case 'userfullname':
            $successMsg = 'Tu nombre ha sido actualizado.';
            break;
        case 'nickname':
            $successMsg = 'Tu nickname ha sido actualizado.';
            break;
        case 'email':
            $successMsg = 'Tu email ha sido actualizado.';
            break;
    }
}
