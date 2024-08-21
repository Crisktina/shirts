<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php?nosesion");
}
include_once 'parts/head.html';
?>

<body
    data-bs-spy="scroll"
    data-bs-target="#navbar"
    data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true"
    tabindex="0">
    <?php include_once 'parts/header.php'; ?>
    <section class="container-grid padding-large position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
                    <div class="col-md-6 col-sm-12">
                        <div class="display-header content-light pe-3">
                            <h2 class="display-7 text-uppercase text-light">¿Has olvidado la contraseña?</h2>
                            <p>Te enviamos un email para recuperar-la.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <form class="subscription-form validate" action="../includes/forgotPass-inc.php" method="POST">
                            <div class="input-group flex-wrap">
                                <input class="form-control btn-rounded-none" type="email" name="EMAIL" placeholder="Tu email aquí" required="">
                                <input class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit" name="send" value="Enviar">Subscribe</input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    //TODO:poner mensaje al usuario un poco más currado
    if (isset($_GET['msg']) == 'Messagesent!') {
        echo 'Mensaje enviado. Revisa tu correo para introducir la nueva contraseña.';
    }
    ?>

    <?php include_once 'parts/footer.html'; ?>
    <script src="../public/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/plugins.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>