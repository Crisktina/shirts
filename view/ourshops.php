<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html';
session_start(); ?>

<body
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php include_once 'parts/header.php'; ?>
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
          <h3>Ahora más cerca de tí</h3>
          <h2 class="display-2 pb-5 text-uppercase text-dark">
            Descubre tu tienda
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-sm-12"></div>
    </div>
  </section>

  <section id="our-store" class="padding-large">
    <div class="container">
      <div class="row">
        <div class="row gy-4">
          <?php require "../includes/autoload.models.php";
          require "../includes/autoload.controlers.php";
          $objeto = new ShopContr();
          $allShops = $objeto->allShopsList();
          foreach ($allShops as $shop): ?>
            <div class="row d-flex flex-wrap align-items-center">
              <div class="col-lg-6">
                <div class="image-holder mb-5">
                  <img src=<?= '../' . htmlspecialchars($shop['shop_photo']); ?> alt="our-store" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="locations-wrap">
                  <div class="location-content d-flex flex-wrap">
                    <div class="col-lg-6 col-sm-12">
                      <div class="content-box text-dark pe-4 mb-5">
                        <h2 class="card-title text-uppercase text-decoration-underline"><?= htmlspecialchars($shop['shop_name']); ?></h2>
                        <div class="contact-address pt-3">
                          <p><?= htmlspecialchars($shop['shop_address']); ?></p>
                        </div>
                        <div class="contact-number">
                          <p>
                            <a href="#"><?= htmlspecialchars($shop['shop_city']); ?></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="footer-top-area">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu">
                <h5 class="widget-title text-uppercase pb-2">Contáctanos</h5>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <svg class="facebook">
                          <use xlink:href="../public/assets/icons/icons.svg#facebook" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="instagram">
                          <use xlink:href="../public/assets/icons/icons.svg#instagram" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="linkedin">
                          <use xlink:href="../public/assets/icons/icons.svg#linkedin" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="youtube">
                          <use xlink:href="../public/assets/icons/icons.svg#youtube" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu contact-item">
                <p>
                  ¿Tienes preguntas?
                  <br>
                  <a href="mailto:">info@gmail.com</a>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu contact-item">
                <p>
                  ¿Necesitas ayuda?
                  <br>
                  <a href="">+00 222 333 444</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php include_once 'parts/footer.html'; ?>
  <script src="../public/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>