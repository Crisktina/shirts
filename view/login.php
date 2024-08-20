<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html'; ?>

  <body
    data-bs-spy="scroll"
    data-bs-target="#navbar"
    data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true"
    tabindex="0"
  >
  <?php include_once 'parts/header.php';?>


      <div class="container padding-large">
        <form class="form-group" action="../includes/login-inc.php" method="POST">
          <div class="row d-flex flex-wrap">
            <div class="col-lg-6">
              <h2 class="display-7 text-uppercase text-dark pb-4">INICIAR SESSIÓN</h2>
              <div class="billing-details">
                <label for="uid">Nombre de usuario*</label>
                <input type="text" id="uid" name="uid" class="form-control mt-2 mb-4 ps-3">
                <label for="pwd">Contraseña*</label>
                <input type="password" id="pwd" name="pwd" class="form-control mt-2 mb-4 ps-3">
                <input type="submit" name="send" value="Enviar">
              </div>
            </div>
          </div>
        </form>
        <p class="padding-small">¿No estas registrado? Ir a  <a href="register.php">Crear cuenta</a></p>
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

