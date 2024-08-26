<?php

//Validar inputs
$emailErr = $emailClassErr = $sendOk = '';

if (isset($_GET['error'])) {
    $error = $_GET['error'];

    switch ($error) {
        case 'emptyEmail':
            $emailErr = "<div class=\"invalid-feedback\">El campo es obligatorio.</div>";
            $emailClassErr = "is-invalid";
            break;

        case 'emailnotFound':
            $emailErr = "<div class=\"invalid-feedback\">El email no esta registrado.</div>";
            $emailClassErr = "is-invalid";
            break;

        case 'invalidemail':
            $emailErr = "<div class=\"invalid-feedback\">Ingrese una dirección de correo electrónico válida en el formato nombre@dominio.com</div>";
            $emailClassErr = "is-invalid";
            break;

        case 'FailedStmt':
            $emailErr =  "<div class=\"invalid-feedback\">No se ha podido enviar el formulario.</div>";
            $emailClassErr = "is-invalid";
            break;
    }
} elseif (isset($_GET['msg']) == 'Messagesent!') {
    $sendOk = "<div class=\"alert alert-success\" role=\"alert\">Mensaje enviado. Revisa tu correo para introducir la nueva contraseña.</div>";
}
