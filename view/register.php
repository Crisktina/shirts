<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html'; ?>

<body
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php include_once 'parts/header.php';
  //validaciones login que insertan div de error
  include_once '../includes/register-validation.php';
  ?>

  <div class="container padding-large">
    <form class="signupForm" id="signupForm" action="../includes/signup-inc.php" method="post">
      <div class="row d-flex flex-wrap">
        <div class="col-lg-6">
          <h2 class="display-7 text-uppercase text-dark pb-4">CREAR CUENTA</h2>
          <div class="billing-details">
            <label for="uidname">Nickname *</label>
            <input type="text" id="uidname" name="uid" class="form-control <?= htmlspecialchars($userClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $userErr; ?>
            <div class="invalid-feedback" id="uidname-error"></div>
            <label for="fullname">Nombre completo *</label>
            <input type="text" id="fullname" name="userfullname" class="form-control <?= htmlspecialchars($fullnClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $fullnErr; ?>
            <div class="invalid-feedback" id="fullname-error"></div>
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" class="form-control <?= htmlspecialchars($emailClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $emailErr; ?>
            <div class="invalid-feedback" id="email-error"></div>
            <label for="pwd">Contraseña*</label>
            <input type="password" id="pwd" name="pwd" class="form-control <?= htmlspecialchars($passClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $passErr; ?>
            <div class="invalid-feedback" id="pwd-error"></div>
            <label for="repeatPwd">Repetir contraseña*</label>
            <input type="password" id="repeatPwd" name="repeatPwd" class="form-control <?= htmlspecialchars($passRClassErr); ?> mt-2 mb-4 ps-3" required>
            <?= $passRErr; ?>
            <div class="invalid-feedback" id="repeatPwd-error"></div>
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