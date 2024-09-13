<?php

//Validar inputs
$userErr = $userClassErr = $fullnErr = $fullnClassErr = $emailErr = $emailClassErr = $passErr = $passClassErr = $passRErr = $passRClassErr = '';

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    switch ($error) {
        case 'emptyInput':
            $userErr = $fullnErr = $emailErr = $passErr = $passRErr = "<div class=\"invalid-feedback\">El campo es obligatorio.</div>";
            $userClassErr = $fullnClassErr = $emailClassErr = $passClassErr = $passRClassErr = "is-invalid";
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

        case 'invalidpwd':
            $passErr = "<div class=\"invalid-feedback\">La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>";
            $passClassErr = "is-invalid";
            break;

        case 'pwdmatch':
            $passRErr = "<div class=\"invalid-feedback\">Las contraseñas no coinciden</div>";
            $passRClassErr = "is-invalid";
            break;

        case 'UserOrMailTaken':
            $emailErr = $userErr = "<div class=\"invalid-feedback\">Usuario y/o email ya existen.</div>";
            $emailClassErr = $userClassErr = "is-invalid";
            break;

        case 'FailedStmt':
            $passRErr =  "<div class=\"invalid-feedback\">No se ha podido enviar el formulario.</div>";
            $userClassErr = $fullnClassErr = $emailClassErr = $passClassErr = $passRClassErr = "is-invalid";
            break;
    }
}
