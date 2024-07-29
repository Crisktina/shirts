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
      class="mt-4 padding-medium "
      >
      <div class="g-2 row d-flex flex-wrap align-items-center">
            <a href="#camisetas" class="btn btn-medium btn-black"
            >CAMISETAS</a>
            <a href="#totebags" class="btn btn-medium btn-black"
            >TOTEBAGS</a>
      </div>
    </section>
    <section
      id="camisetas"
      class="product-store padding-large position-relative"
    >
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">CAMISETAS</h2>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
            <!-- productos: camisetas ===================================== -->
            <?php include_once '../includes/show-products.php';
            foreach ($allShirts as $shirt): ?>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src=<?= htmlspecialchars($shirt['prod_photo']); ?>
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Añadir<svg class="cart-outline">
                          <use xlink:href="public/assets/icons/icons.svg#cart-outline"></use>
                        </svg></a>
                    </div>
                  </div>
                  <div
                    class="card-detail d-flex justify-content-between align-items-baseline pt-3"
                  >
                    <h3 class="card-title text-uppercase">
                      <a href="#"><?= htmlspecialchars($shirt['prod_name']); ?></a>
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
      </div>
    </section>
    <section
      id="totebags"
      class="product-store padding-large position-relative"
    >
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">TOTEBAGS</h2>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
            <!-- productos: totebags ===================================== -->
            <?php include_once '../includes/show-products.php';
            foreach ($allTotebags as $totebag): ?>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src=<?= htmlspecialchars($totebag['prod_photo']); ?>
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Añadir<svg class="cart-outline">
                          <use xlink:href="public/assets/icons/icons.svg#cart-outline"></use>
                        </svg></a>
                    </div>
                  </div>
                  <div
                    class="card-detail d-flex justify-content-between align-items-baseline pt-3"
                  >
                    <h3 class="card-title text-uppercase">
                      <a href="#"><?= htmlspecialchars($totebag['prod_name']); ?></a>
                    </h3>
                    <span class="item-price text-primary"><?= htmlspecialchars($totebag['prod_price']); ?> €</span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- FIINNNN productos: totebags ===================================== -->
              
            </div>
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
