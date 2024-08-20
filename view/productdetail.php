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
  <?php include_once 'parts/header.php'; ?>

  <section id="selling-product" class="single-product padding-xlarge">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="product-preview mb-3">
              <img src="images/singel-product-item.jpg" alt="single-product" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-info">
              <div class="element-header">
                <h3 itemprop="name" class="display-7 text-uppercase">Pink Watch</h3>
                <div class="rating-container d-flex align-items-center">
                  <div class="rating" data-rating="1" onclick="rate(1)">
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <span class="rating-count ps-2">5.2</span>
                  </div>
                </div>
              </div>
              <div class="product-price pt-3 pb-3">
                <strong class="text-primary display-6 fw-bold">$870.00</strong>
              </div>
              <p>Justo, cum feugiat imperdiet nulla molestie ac vulputate scelerisque amet. Bibendum adipiscing platea blandit sit sed quam semper rhoncus. Diam ultrices maecenas consequat eu tortor orci, cras lectus mauris, cras egestas quam venenatis neque.</p>
              <div class="cart-wrap padding-small">
                <div class="color-options product-select">
                  <div class="color-toggle" data-option-index="0">
                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:</h4>
                    <ul class="select-list list-unstyled d-flex">
                      <li class="select-item pe-3" data-val="Green" title="Green">
                        <a href="#">Green</a>
                      </li>
                      <li class="select-item pe-3" data-val="Orange" title="Orange">
                        <a href="#">Orange</a>
                      </li>
                      <li class="select-item pe-3" data-val="Red" title="Red">
                        <a href="#">Red</a>
                      </li>
                      <li class="select-item" data-val="Black" title="Black">
                        <a href="#">Black</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="swatch product-select" data-option-index="1">
                  <h4 class="item-title text-uppercase text-dark text-decoration-underline">Size:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item pe-3">
                      <a href="#">XL</a>
                    </li>
                    <li data-value="M" class="select-item pe-3">
                      <a href="#">L</a>
                    </li>
                    <li data-value="L" class="select-item pe-3">
                      <a href="#">M</a>
                    </li>
                    <li data-value="L" class="select-item">
                      <a href="#">S</a>
                    </li>
                  </ul>
                </div>
                <div class="product-quantity">
                  <div class="stock-number text-dark">2 in stock</div>
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
                      <button type="submit" class="btn btn-primary btn-medium text-uppercase me-3 mt-3">Buy now</button>
                      <button type="submit" name="add-to-cart" value="1269" class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</button>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="meta-product py-2">
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">SKU:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">1223</li>
                  </ul>
                </div>
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">Category:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">
                      <a href="#">Watch</a>,
                    </li>
                    <li data-value="S" class="select-item">
                      <a href="#"> Screen touch</a>,
                    </li>
                  </ul>
                </div>
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">Tags:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">
                      <a href="#">Classic</a>,
                    </li>
                    <li data-value="S" class="select-item">
                      <a href="#"> Modern</a>
                    </li>
                  </ul>
                </div>
              </div>
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
