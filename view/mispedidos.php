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
            Tus pedidos
          </h2>
        </div>
      </div>
      <div class="col-md-6 col-sm-12"></div>
    </div>
  </section>
  <?php if (isset($_GET['id'])): ?>
    <section class="shopify-cart padding-large">
      <div class="container">
        <h2 class="display-7 text-uppercase text-dark pb-4">PEDIDO REFERENCIA <b>#1</b></h2>
        <div class="row">
          <div class="cart-table">
            <div class="cart-header">
              <div class="row d-flex text-uppercase">
                <h3 class="cart-title col-lg-5 pb-3">Producto</h3>
                <h3 class="cart-title col-lg-3 pb-3">Cantidad</h3>
                <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
              </div>
            </div>

            <!-- Hacer bucle con las lineas de pedido -->
            <div class="cart-item border-top border-bottom padding-small">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-3">
                  <div class="cart-info d-flex flex-wrap align-items-center mb-0">
                    <div class="col-lg-2">
                      <div class="card-image">
                        <img src="../public/assets/images/productos/camisetas/camiseta-item1.jpg" alt="cloth" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card-detail ps-5">
                        <h3 class="card-title text-uppercase">
                          <a href="#">Iphone 13</a>
                        </h3>
                        <div class="card-price">
                          <span class="money text-primary" data-currency-usd="$1200.00">15.00€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-3">
                  <div class="row d-flex">
                    <div class="col-lg-5 d-flex align-items-center">
                      <h3 class="qty-field text-uppercase">
                        2
                      </h3>
                    </div>
                    <div class="col-lg-6">
                      <div class="total-price">
                        <span class="money text-primary">15.00€</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="cart-totals bg-grey padding-medium">
            <div class="total-price pb-5">
              <table cellspacing="0" class="table text-uppercase">
                <tbody>
                  <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                    <th>Fecha del pedido</th>
                    <td data-title="Subtotal">
                      <span class="price-amount amount text-primary ps-5">
                        <bdi>
                          13/6/2024
                        </bdi>
                      </span>
                    </td>
                  </tr>
                  <tr class="order-total pt-2 pb-2 border-bottom">
                    <th>Total</th>
                    <td data-title="Total">
                      <span class="price-amount amount text-primary ps-5">
                        <bdi>150.00<span class="price-currency-symbol">€</span></bdi>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="button-wrap">
              <a class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none" href='mispedidos.php'>Cerrar detalles del pedido</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <div class="container">
    <div class="cart-totals bg-grey padding-medium">
      <h2 class="display-7 text-uppercase text-dark pb-4">Listado de pedidos</h2>
      <div class="total-price pb-5">
        <table cellspacing="0" class="table text-uppercase">
          <tbody>
            <?php
            require "../includes/autoload.models.php";
            require "../includes/autoload.controlers.php";
            $userid =  $_SESSION['userID'];
            $objeto = new PedidosContr();
            $allPedidos = $objeto->setUserid($userid);
            $allPedidos = $objeto->allPedidos();
            foreach ($allPedidos as $pedido):
            ?>
              <!-- Hacer bucle con los pedidos anteriores -->
              <tr class="order-total pt-2 pb-2 border-bottom">
                <th><a href="mispedidos.php?id=<?= htmlspecialchars($pedido['pedido_id']) ?>">Referencia: <span class="text-primary ps-5">
                      #<?= $pedido['pedido_id'] ?>
                    </span></a></th>
                <td data-title="Total"> FECHA:
                  <span class="text-primary ps-5">
                    <?= $pedido['pedido_date'] ?>
                  </span>
                </td>
                <td data-title="Total">PRECIO:
                  <span class="price-amount amount text-primary ps-5">
                    <bdi><?= $pedido['total_price'] ?><span class="price-currency-symbol">€</span></bdi>
                  </span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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