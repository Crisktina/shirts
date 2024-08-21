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
  <?php include_once 'parts/header.php';
  ?>
  <section
    class="bg-light-blue overflow-hidden mt-5 padding-medium"
    style="
        background-image: url('images/single-image1.png');
        background-position: right;
        background-repeat: no-repeat;
      ">
    <div class="row d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-sm-12">
        <div class="text-content offset-4 padding-small">
          <h3>Hola user, aquí tienes tu</h3>
          <h2 class="display-2 pb-5 text-uppercase text-dark">
            Perfil de usuario
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-sm-12"></div>
    </div>
  </section>

  <div class="padding-large">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pb-3">
          <div class="d-flex flex-wrap">
            <div class="content-box pe-4 mb-5">
              <svg class="user-items ">
                <use xlink:href="../public/assets/icons/icons.svg#user"></use>
              </svg>
              <h3 class="card-title text-uppercase text-decoration-underline"><?= htmlspecialchars($_SESSION['username']); ?></h3>
              <div class="pt-3">
                <p><?= htmlspecialchars($_SESSION['userfullname']); ?></p>
              </div>
              <div>
                <p><?= htmlspecialchars($_SESSION['usermail']); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="inquiry-item col-lg-6">
          <h2 class="display-7 text-uppercase text-dark">¿Quieres modificar tus datos?</h2>
          <p>Rellena los campos en los que desees modificiar tus datos</p>
          <form class="form-group flex-wrap">
            <div class="col-lg-12 mb-3">
              <input type="text" id="fname" name="uid" class="form-control mt-2 mb-4 ps-3" value="<?php echo htmlspecialchars($user['uid']); ?>">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_nickname" value="Actualizar Nickname">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="text" id="lname" name="userfullname" class="form-control mt-2 mb-4 ps-3" value="<?php echo htmlspecialchars($user['userfullname']); ?>">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_fullname" value="Actualizar Nombre">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" id="email" name="email" class="form-control mt-2 mb-4 ps-3" value="<?php echo htmlspecialchars($user['email']); ?>">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_email" value="Actualizar Email">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container padding-large">
    <form class="form-group" action="../includes/signup-inc.php" method="post">
      <div class="row d-flex flex-wrap">
        <div class="col-lg-6">
          <h2 class="display-7 text-uppercase text-dark pb-4">Perfil de usuario</h2>
          <div class="billing-details">
            <label for="fname"><?= htmlspecialchars($_SESSION['username']); ?></label>
            <input type="text" id="fname" name="uid" class="form-control mt-2 mb-4 ps-3">
            <label for="lname"><?= htmlspecialchars($_SESSION['userfullname']); ?></label>
            <input type="text" id="lname" name="userfullname" class="form-control mt-2 mb-4 ps-3">
            <label for="email"><?= htmlspecialchars($_SESSION['usermail']); ?></label>
            <input type="email" id="email" name="email" class="form-control mt-2 mb-4 ps-3">
            <input type="submit" name="send" value="Enviar">
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