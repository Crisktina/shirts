<?php

//Validar inputs
$userErr = $userClassErr = $passErr = $passClassErr = '';

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    switch ($error) {
        case 'emptyInputUser':
            $userErr = "<div class=\"invalid-feedback\">El campo es obligatorio.</div>";
            $userClassErr = "is-invalid";
            break;

        case 'emptyInputPassword':
            $passErr = "<div class=\"invalid-feedback\">El campo es obligatorio.</div>";
            $passClassErr = "is-invalid";
            break;

        case 'invalidPassUser':
            $passErr = $userErr = "<div class=\"invalid-feedback\">Usuario y/o contraseña no válida.</div>";
            $passClassErr = $userClassErr = "is-invalid";
            break;
        case 'FailedStmt':
            $passErr = $userErr =  "<div class=\"invalid-feedback\">No se ha podido enviar el formulario.</div>";
            $passClassErr = $userClassErr = "is-invalid";
            break;
    }
} elseif (isset($_GET['newPassword']) == 'Success') {
    $sendOk = "<div class=\"alert alert-success\" role=\"alert\">Nueva contraseña creada. Introduce tu nueva contraseña para iniciar sessión.</div>";
}


// else {
//     $userClassErr = $passClassErr = 'is-valid';
// }
