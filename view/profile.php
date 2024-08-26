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
    class="bg-light-blue overflow-hidden mt-5 pt-5"
    style="
        background-image: url('images/single-image1.png');
        background-position: right;
        background-repeat: no-repeat;
      ">
    <div class="row d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-sm-12">
        <div class="text-content offset-4 padding-small">

          <h3>¡Hola <b class="text-uppercase"><?= htmlspecialchars($_SESSION['username']); ?></b>!</h3>
          <h2 class="display-2 pb-5 text-uppercase text-dark">
            Tu perfil de usuario
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
          <div class="row pe-4 mb-5">
            <svg class=" m-0 p-0 " style="width: 90px; height: 90px;">
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
        <div class="inquiry-item col-lg-6">
          <h2 class="display-7 text-uppercase text-dark">¿Quieres modificar tus datos?</h2>
          <p>Rellena los campos en los que desees modificiar tus datos</p>
          <form class="form-group flex-wrap" action="../includes/modify-user.php" method="POST">
            <div class="col-lg-12 mb-3">
              <input type="text" id="fname" name="uid" class="form-control mt-2 mb-4 ps-3">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_nickname" value="Actualizar Nickname">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="text" id="fullname" name="userfullname" class="form-control mt-2 mb-4 ps-3">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_fullname" value="Actualizar Nombre">
            </div>
            <div class="col-lg-12 mb-3">
              <input type="email" id="email" name="email" class="form-control mt-2 mb-4 ps-3">
              <input class="btn btn-dark btn-medium text-uppercase btn-rounded-none" type="submit" name="update_email" value="Actualizar Email">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php include_once 'parts/footer.html'; ?>
  <script src="../public/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>