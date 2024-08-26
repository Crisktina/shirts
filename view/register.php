<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html'; ?>

<body
  data-bs-spy="scroll"
  data-bs-target="#navbar"
  data-bs-root-margin="0px 0px -40%"
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php include_once 'parts/header.php';
  //validaciones login que insertan div de error
  include_once '../includes/register-validation.php';
  ?>

  <div class="container padding-large">
    <form class="form-group" action="../includes/signup-inc.php" method="post">
      <div class="row d-flex flex-wrap">
        <div class="col-lg-6">
          <h2 class="display-7 text-uppercase text-dark pb-4">CREAR CUENTA</h2>
          <div class="billing-details">
            <label for="fname">Nickname *</label>
            <input type="text" id="fname" name="uid" class="form-control <?= htmlspecialchars($userClassErr); ?> mt-2 mb-4 ps-3">
            <?= $userErr; ?>
            <label for="lname">Nombre completo *</label>
            <input type="text" id="lname" name="userfullname" class="form-control <?= htmlspecialchars($fullnClassErr); ?> mt-2 mb-4 ps-3">
            <?= $fullnErr; ?>
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" class="form-control <?= htmlspecialchars($emailClassErr); ?> mt-2 mb-4 ps-3">
            <?= $emailErr; ?>
            <label for="pwd">Contraseña*</label>
            <input type="password" id="pwd" name="pwd" class="form-control <?= htmlspecialchars($passClassErr); ?> mt-2 mb-4 ps-3">
            <?= $passErr; ?>
            <label for="repeatPwd">Repetir contraseña*</label>
            <input type="password" id="repeatPwd" name="repeatPwd" class="form-control <?= htmlspecialchars($passRClassErr); ?> mt-2 mb-4 ps-3">
            <?= $passRErr; ?>
            <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="send" value="Enviar">
          </div>
        </div>

      </div>
    </form>
    <p class="padding-small">¿Ya tienes cuenta? Ve a <a href="login.php">Iniciar sesión</a></p>
  </div>

  <?php include_once 'parts/footer.html'; ?>
  <script src="../public/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>