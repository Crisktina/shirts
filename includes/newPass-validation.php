<?php

//Validar inputs
$passErr = $passClassErr = $passRErr = $passRClassErr = $sendOk = '';

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    switch ($error) {
        case 'emptyInput':
            $passErr = $passRErr = "<div class=\"invalid-feedback\">El campo es obligatorio.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;

        case 'PasswordNotMatch':
            $passErr = "<div class=\"invalid-feedback\">La contraseña no coincide.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;

        case 'invalidpwd':
            $passErr = "<div class=\"invalid-feedback\">La contraseña debe tener al menos 8 caracteres, incluyendo al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;
        case 'tokenNotExisted':
            $passErr = "<div class=\"invalid-feedback\">El token no existe.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;
        case 'tokenExpired':
            $passErr = "<div class=\"invalid-feedback\">El token ha expirado.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;

        case 'FailedStmt':
            $passErr =  "<div class=\"invalid-feedback\">No se ha podido enviar el formulario.</div>";
            $passClassErr = $passRClassErr = "is-invalid";
            break;
    }
}
