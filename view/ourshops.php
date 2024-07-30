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
  <?php include_once 'parts/header.html'; ?>

    <section
      id="yearly-sale"
      class="bg-light-blue overflow-hidden mt-5 padding-large"
      style="
        background-image: url('images/single-image1.png');
        background-position: right;
        background-repeat: no-repeat;
      ">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium">
            <h3>Ahora más cerca de tí</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">
              Descubre tu tienda
            </h2>
          </div>
        </div>
        <div class="col-md-6 col-sm-12"></div>
      </div>
    </section>
    
    <section
      id="our-shops"
      class="product-store position-relative padding-large"
    >
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Nuestras tiendas</h2>
          </div>
          <div class="row gy-4">
            <?php require "../includes/autoload.models.php";
              require "../includes/autoload.controlers.php";
              $objeto = new ShopContr();
              $allShops = $objeto->allShopsList();
            foreach ($allShops as $shop): ?>
              <div class="col-md-3">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src=<?='../'.htmlspecialchars($shop['shop_photo']); ?>
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#"><?= htmlspecialchars($shop['shop_city']); ?></a>
                    </h3>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
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
      <hr />
    </footer>
    <?php include_once 'parts/footer.html'; ?>
    <script src="../public/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../public/js/plugins.js"></script>
    <script type="text/javascript" src="../public/js/script.js"></script>
  </body>
</html>
