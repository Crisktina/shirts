<!DOCTYPE html>
<html>
<?php include_once 'parts/head.html'; ?>

<body
  data-bs-smooth-scroll="true"
  tabindex="0">
  <?php
  session_start();
  include_once 'parts/header.php';
  require "../includes/autoload.models.php";
  require "../includes/autoload.controlers.php";

  if (isset($_GET['id'])) :
    $productId = intval($_GET['id']);
    $objeto1 = new ProductContr();
    $productDetail = $objeto1->getProductById($productId);
    if (isset($productDetail)) :
      $product = $productDetail[0];
  ?>

      <section id="selling-product" class="single-product padding-xlarge">
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-6">
              <div class="product-preview mb-3">
                <img src="../<?= htmlspecialchars($product['prod_photo']) ?>" alt="Foto del producto llamado <?= htmlspecialchars($product['prod_name']) ?>" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="product-info">
                <div class="element-header">
                  <h3 itemprop="name" class="display-7 text-uppercase"><?= htmlspecialchars($product['prod_name']) ?></h3>
                </div>
                <div class="product-price pt-3 pb-3">
                  <strong class="text-primary display-6 fw-bold"><?= htmlspecialchars($product['prod_price']) ?> €</strong>
                </div>
                <p><?= $product['prod_description'] ?></p>
                <div class="cart-wrap padding-small">
                  <div class="color-options product-select">
                    <div class="color">
                      <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:</h4>
                      <p><?= htmlspecialchars($product['prod_color']) ?></p>
                    </div>
                  </div>
                  <div class="product-quantity">
                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Disponible en:</h4>
                    <?php foreach ($productDetail as $index => $shops): ?>
                      <div class="stock-number text-dark"><?= htmlspecialchars($shops['shop_name']) ?> (<?= htmlspecialchars($shops['shop_city']) ?>)</div>
                      <p><?= htmlspecialchars($shops['stock_quantity']) ?> unidades en stock</p>
                    <?php endforeach; ?>
                    <?php if (isset($_SESSION['username'])): ?>
                      <form action="../includes/add-to-cart.php" method="post">
                        <div class="stock-button-wrap pt-3">
                          <div class="input-group product-qty">
                            <span class="input-group-btn">
                              <button type="button" class="quantity-left-minus btn btn-number" data-type="minus" data-field="">
                                -
                              </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn">
                              <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                                +
                              </button>
                            </span>
                          </div>
                          <div class="qty-button d-flex flex-wrap pt-3">
                            <input type="hidden" name="productid" value="<?= intval($_GET['id']) ?>">
                            <input type="submit" class="btn btn-primary btn-medium text-uppercase me-3 mt-3" name="add-to-cart" value="Añadir al pedido">
                          </div>
                        </div>
                      </form>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="meta-product py-2">
                  <div class="meta-item d-flex align-items-baseline">
                    <h4 class="item-title no-margin pe-2">Categoría:</h4>
                    <p><?= intval($product['prod_category']) == 0 ? "Camisetas" : "Totebags"; ?></p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php
    endif;
  //var_dump($productDetail);
  endif;
  ?>
  <?php include_once 'parts/footer.html'; ?>
  <script src="../public/js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/script.js"></script>
</body>

</html>