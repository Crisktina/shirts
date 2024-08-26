<!DOCTYPE html>
<html>
<?php
session_start();
include_once 'parts/head.html';
include_once '../includes/forgotPass-validation.php';
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
                                <input class="form-control  <?= htmlspecialchars($emailClassErr); ?> btn-rounded-none" type="email" name="email" placeholder="Tu email aquí" required>
                                <input class="btn btn-medium btn-primary text-uppercase btn-rounded-none" type="submit" name="send" value="Enviar">
                                <?= $emailErr; ?>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?= $sendOk; ?>
        </div>
    </section>


    <?php include_once 'parts/footer.html'; ?>
    <script src="../public/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/plugins.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>