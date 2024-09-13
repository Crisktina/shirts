<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html';
session_start(); ?>

<body
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php include_once 'parts/header.php';
  //validaciones login que insertan div de error
  include_once '../includes/login-validation.php';
  ?>


  <div class="container padding-large">
    <form class="form-group" action="../includes/login-inc.php" method="POST">
      <div class="row d-flex flex-wrap">
        <div class="col-lg-6">
          <h2 class="display-7 text-uppercase text-dark pb-4">INICIAR SESSIÓN</h2>
          <?= $sendOk; ?>
          <div class="billing-details">
            <label for="uidname">Nombre de usuario*</label>
            <input type="text" id="uidname" name="uid" class="form-control  <?= htmlspecialchars($userClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $userErr; ?>
            <div class="invalid-feedback" id="uidname-error"></div>
            <label for="pwd">Contraseña*</label>
            <input type="password" id="pwd" name="pwd" class="form-control <?= htmlspecialchars($passClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $passErr; ?>
            <div class="invalid-feedback" id="pwd-error"></div>
            <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="send" value="Enviar">
          </div>
        </div>
      </div>
    </form>
    <p class="padding-small">¿No estas registrado? Ir a <a href="register.php">Crear cuenta</a></p>
    <a href="forgotpassword.php">¿Has olvidado la contraseña?</a>
  </div>



  <?php include_once 'parts/footer.html'; ?>
  <script src="../public/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>