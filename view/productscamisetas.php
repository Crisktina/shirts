<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html';
session_start(); ?>

<body
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php include_once 'parts/header.php'; ?>
  <section
    class="bg-light-blue overflow-hidden mt-5 pt-5">
    <div class="row d-flex flex-wrap align-items-center">
      <div class="col-md-6 col-sm-12">
        <div class="text-content offset-4 padding-small">
          <h2 class="display-2 pb-5 text-uppercase text-dark">
            CAMISETAS
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-sm-12"></div>
    </div>
  </section>
  <section
    id="camisetas"
    class="product-store padding-large position-relative">
    <div class="container">
      <div class="row">
        <div class="row gy-4">
          <!-- productos: camisetas ===================================== -->
          <?php
          require "../includes/autoload.models.php";
          require "../includes/autoload.controlers.php";
          $objeto1 = new ProductContr();
          $allShirts = $objeto1->allShirtsList();
          foreach ($allShirts as $index => $shirt): ?>
            <div class="col-md-3">
              <div class="product-card position-relative">
                <div class="image-holder">
                  <img
                    src=<?= '../' . htmlspecialchars($shirt['prod_photo']); ?>
                    alt="product-item"
                    class="img-fluid" />
                </div>
                <div class="cart-concern position-absolute">
                  <div class="cart-button d-flex">
                    <a href="productdetail.php?id=<?= htmlspecialchars($shirt['prod_id']); ?>" class="btn btn-medium btn-black">
                      Ver
                      <svg class="cart-outline">
                        <use xlink:href="../public/assets/icons/icons.svg#chevron-right"></use>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                  <h3 class="card-title text-uppercase">
                    <a href="productdetail.php?id=<?= htmlspecialchars($shirt['prod_id']); ?>"><?= htmlspecialchars($shirt['prod_name']); ?></a>
                  </h3>
                  <span class="item-price text-primary"><?= htmlspecialchars($shirt['prod_price']); ?> €</span>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- FIINNNN productos: camisetas ===================================== -->
        </div>
      </div>
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