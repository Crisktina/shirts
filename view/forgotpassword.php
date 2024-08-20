<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agencia Pisos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
    <h2>Forgot Email</h2>
    <form action="../includes/forgotPass-inc.php" method="POST">
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter password" name="email">
        </div>
        <input type="submit" name="send" value="Enviar">
    </form>
</div>
<?php 
//TODO:poner mensaje al usuario un poco más currado
 if(isset($_GET['msg']) == 'Messagesent!'){
     echo 'Mensaje enviado. Revisa tu correo para introducir la nueva contraseña.';
 }
?>

</body>
</html>