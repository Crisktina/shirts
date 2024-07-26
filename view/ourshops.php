<!DOCTYPE html>
<html>
  <head>
    <title>Tu-shirt!</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="Cristina Hidalgo" />
    <meta name="keywords" content="totebag, camisetas, estampadas" />
    <meta name="description" content="Tienda online de camisetas y totebags con frases ingeniosas estampadas." />
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <!-- script
    ================================================== -->
    <script src="../public/js/modernizr.js"></script>
  </head>
  <body
    data-bs-spy="scroll"
    data-bs-target="#navbar"
    data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true"
    tabindex="0"
  >
    <div class="search-popup">
      <div class="search-popup-container">
        <form role="search" method="get" class="search-form" action="">
          <input
            type="search"
            id="search-form"
            class="search-field"
            placeholder="Type and press enter"
            value=""
            name="s"
          />
          <button type="submit" class="search-submit">
            <svg class="search"><use xlink:href="public/assets/icons/icons.svg#search"></use></svg>
          </button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>

        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="#" title="Mobile Phones">Mobile Phones</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Smart Watches">Smart Watches</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Headphones">Headphones</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Accessories">Accessories</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Monitors">Monitors</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Speakers">Speakers</a>
          </li>
          <li class="cat-list-item">
            <a href="#" title="Memory Cards">Memory Cards</a>
          </li>
        </ul>
      </div>
    </div>

    <header
      id="header"
      class="site-header header-scrolled fixed-top text-black bg-light"
    >
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="images/main-logo.png" class="logo" />
          </a>
          <button
            class="navbar-toggler d-flex d-lg-none order-3 p-2"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#bdNavbar"
            aria-controls="bdNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg class="navbar-icon">
              <use xlink:href="../public/assets/icons/icons.svg#navbar-icon"></use>
            </svg>
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="bdNavbar"
            aria-labelledby="bdNavbarOffcanvasLabel"
          >
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.html">
                <img src="images/main-logo.png" class="logo" />
              </a>
              <button
                type="button"
                class="btn-close btn-close-black"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
                data-bs-target="#bdNavbar"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul
                id="navbar"
                class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3"
              >
                <li class="nav-item">
                  <a class="nav-link me-4 active" href="#productos">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#company-services">Nuestras tiendas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#mobile-products">Mis pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="#smart-watches">Mis datos</a>
                </li>
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3">
                        <a href="#" class="search-button">
                          <svg class="search">
                            <use xlink:href="../public/assets/icons/icons.svg#search"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="pe-3">
                        <a href="#">
                          <svg class="user">
                            <use xlink:href="../public/assets/icons/icons.svg#user"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="cart.html">
                          <svg class="cart">
                            <use xlink:href="../public/assets/icons/icons.svg#cart"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
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
        <div class="r ow">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Nuestras tiendas</h2>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="../public/assets/images/product-item1.jpg"
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Ver</a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Barcelona</a>
                    </h3>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="../public/assets/images/product-item1.jpg"
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Ver</a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Igualada</a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>
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