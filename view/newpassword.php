<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $token = "";
    if(isset($_GET['token'])) $token = $_GET['token'];
    ?>
   <form method="post" action="../includes/newPass-inc.php">
   <input type="password" name="password" placeholder="Introduce your password"><br>
   <input type="password" name="repeatPassword" placeholder="Introduce your password again"><br>
   <input type="hidden" name="token" value="<?= $token?>">
    <input type="submit" name="send" value="Send">
   </form> 
</body>
</html>