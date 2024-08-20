<?php
session_start();

// Eliminar datos de la sesión
$_SESSION = array();

// eliminar la cookie de sesión.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();

// Redirigir a la página de inicio
header("Location: ../index.php?logout=success");
exit();
?>
