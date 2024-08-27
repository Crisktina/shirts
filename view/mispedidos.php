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

  <section class="shopify-cart padding-large">
    <div class="container">
      <div class="row">
        <div class="cart-table">
          <div class="cart-header">
            <div class="row d-flex text-uppercase">
              <h3 class="cart-title col-lg-4 pb-3">Product</h3>
              <h3 class="cart-title col-lg-3 pb-3">Quantity</h3>
              <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
            </div>
          </div>
          <div class="cart-item border-top border-bottom padding-small">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-3">
                <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                  <div class="col-lg-5">
                    <div class="card-image">
                      <img src="images/cart-item1.jpg" alt="cloth" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card-detail ps-3">
                      <h3 class="card-title text-uppercase">
                        <a href="#">Iphone 13</a>
                      </h3>
                      <div class="card-price">
                        <span class="money text-primary" data-currency-usd="$1200.00">$1500.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-7">
                <div class="row d-flex">
                  <div class="col-md-6">
                    <div class="qty-field">
                      <div class="qty-number d-flex">
                        <div class="quntity-button incriment-button">+</div>
                        <input class="spin-number-output bg-light no-margin" type="text" readonly="" value="0">
                        <div class="quntity-button decriment-button">-</div>
                      </div>
                      <div class="regular-price"></div>
                      <div class="quantity-output text-center bg-primary"></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="total-price">
                      <span class="money text-primary">$1500.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-2">
                <div class="cart-remove">
                  <a href="#">
                    <svg class="close" width="38px">
                      <use xlink:href="#close"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="cart-item border-top border-bottom padding-small">
            <div class="row align-items-center">
              <div class="col-lg-4 col-md-3">
                <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                  <div class="col-lg-5">
                    <div class="card-image">
                      <img src="images/cart-item2.jpg" alt="cloth" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card-detail">
                      <h3 class="card-title text-uppercase">
                        <a href="#">Pink watch</a>
                      </h3>
                      <div class="card-price">
                        <span class="money text-primary" data-currency-usd="$1200.00">$870.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-7">
                <div class="row d-flex">
                  <div class="col-lg-6">
                    <div class="qty-field">
                      <div class="qty-number d-flex">
                        <div class="quntity-button incriment-button">+</div>
                        <input class="spin-number-output bg-light no-margin" type="text" readonly="" value="0">
                        <div class="quntity-button decriment-button">-</div>
                      </div>
                      <div class="regular-price"></div>
                      <div class="quantity-output text-center bg-primary"></div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="total-price">
                      <span class="money text-primary">$870.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-2">
                <div class="cart-remove">
                  <a href="#">
                    <svg class="close" width="38px">
                      <use xlink:href="#close"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cart-totals bg-grey padding-medium">
          <h2 class="display-7 text-uppercase text-dark pb-4">Cart Totals</h2>
          <div class="total-price pb-5">
            <table cellspacing="0" class="table text-uppercase">
              <tbody>
                <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                  <th>Subtotal</th>
                  <td data-title="Subtotal">
                    <span class="price-amount amount text-primary ps-5">
                      <bdi>
                        <span class="price-currency-symbol">$</span>2,370.00
                      </bdi>
                    </span>
                  </td>
                </tr>
                <tr class="order-total pt-2 pb-2 border-bottom">
                  <th>Total</th>
                  <td data-title="Total">
                    <span class="price-amount amount text-primary ps-5">
                      <bdi>
                        <span class="price-currency-symbol">$</span>2,370.00</bdi>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="button-wrap">
            <button class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Update Cart</button>
            <button class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Continue Shopping</button>
            <button class="btn btn-black btn-medium text-uppercase mb-3 btn-rounded-none">Proceed to checkout</button>
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