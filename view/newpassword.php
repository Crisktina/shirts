<!DOCTYPE html>
<html>
<?php
session_start();
include_once 'parts/head.html';
?>

<body
    data-bs-smooth-scroll="true"
    tabindex="0">
    <?php
    include_once 'parts/header.php';
    $token = "";
    if (isset($_GET['token'])) $token = $_GET['token'];

    include_once '../includes/newPass-validation.php';
    ?>

    <div class="container mt-3 padding-large">
        <h2 class="display-6 fw-normal text-dark text-uppercase">Nueva contraseña</h2>
        <form class="form-group padding-small" method="post" action="../includes/newPass-inc.php">
            <p>Escribe tu nueva contraseña.</p>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <input class="form-control <?= htmlspecialchars($passClassErr); ?>  ps-3" type="password" name="password" placeholder="Contraseña *" required>
                    <?= $passErr; ?>
                </div>
                <div class="col-lg-6">
                    <input class="form-control <?= htmlspecialchars($passRClassErr); ?>  ps-3" type="password" name="repeatPassword" placeholder="Repetir contraseña *" required>
                    <?= $passRErr; ?>
                </div>
                <input type="hidden" name="token" value="<?= $token ?>">
                <div class="col-lg-12 mt-3">
                    <input class="btn btn-medium btn-black text-uppercase btn-rounded-none" type="submit" name="send" value="Enviar">
                </div>
            </div>
        </form>
    </div>
    <?php include_once 'parts/footer.html'; ?>
    <script src="../public/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/plugins.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>