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
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <!-- script
    ================================================== -->
    <script src="public/js/modernizr.js"></script>
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
          <a class="navbar-brand" href="index.php">
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
              <use xlink:href="public/assets/icons/icons.svg#navbar-icon"></use>
            </svg>
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="bdNavbar"
            aria-labelledby="bdNavbarOffcanvasLabel"
          >
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.php">
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
                  <a class="nav-link me-4" href="view/products.php">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="view/ourshops.php">Nuestras tiendas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="view/mispedidos.php">Mis pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="view/profile.php">Mis datos</a>
                </li>
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3">
                        <a href="#" class="search-button">
                          <svg class="search">
                            <use xlink:href="public/assets/icons/icons.svg#search"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="pe-3">
                        <a href="view/login.php">
                          <svg class="user">
                            <use xlink:href="public/assets/icons/icons.svg#user"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="cart.html">
                          <svg class="cart">
                            <use xlink:href="public/assets/icons/icons.svg#cart"></use>
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
            <h3>Hasta septiembre</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">
              10% de descuento
            </h2>
            <a
              href="view/products.php"
              class="btn btn-medium btn-dark text-uppercase btn-rounded-none"
              >Ver productos</a
            >
          </div>
        </div>
        <div class="col-md-6 col-sm-12"></div>
      </div>
    </section>
    
    <section
      id="mobile-products"
      class="product-store position-relative padding-large"
    >
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Camisetas</h2>
            <div class="btn-right">
              <a
                href="view/products.php"
                class="btn btn-medium btn-normal text-uppercase"
                >Ver productos</a
              >
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item1.jpg"
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
                      <a href="#">Iphone 10</a>
                    </h3>
                    <span class="item-price text-primary">€980</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item2.jpg"
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Añadir<svg class="cart-outline">
                          <use xlink:href="public/assets/icons/icons.svg#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div
                    class="card-detail d-flex justify-content-between align-items-baseline pt-3"
                  >
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 11</a>
                    </h3>
                    <span class="item-price text-primary">€1100</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item3.jpg"
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
                      <a href="#">Iphone 8</a>
                    </h3>
                    <span class="item-price text-primary">€780</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item4.jpg"
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
                      <a href="#">Iphone 13</a>
                    </h3>
                    <span class="item-price text-primary">€1500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item5.jpg"
                      alt="product-item"
                      class="img-fluid"
                    />
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black"
                        >Añadir<svg class="cart-outline">
                          <use xlink:href="public/assets/icons/icons.svg#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div
                    class="card-detail d-flex justify-content-between align-items-baseline pt-3"
                  >
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 12</a>
                    </h3>
                    <span class="item-price text-primary">€1300</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <section
      id="smart-watches"
      class="product-store padding-large position-relative"
    >
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">TOTEBAGS</h2>
            <div class="btn-right">
              <a
                href="view/products.php"
                class="btn btn-medium btn-normal text-uppercase"
                >Ver productos</a
              >
            </div>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item6.jpg"
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
                      <a href="#">Pink watch</a>
                    </h3>
                    <span class="item-price text-primary">€870</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item7.jpg"
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
                      <a href="#">Heavy watch</a>
                    </h3>
                    <span class="item-price text-primary">€680</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item8.jpg"
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
                      <a href="#">spotted watch</a>
                    </h3>
                    <span class="item-price text-primary">€750</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item9.jpg"
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
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">€650</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img
                      src="images/product-item10.jpg"
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
                  <div class="card-detail d-flex justify-content-between pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">black watch</a>
                    </h3>
                    <span class="item-price text-primary">€750</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    
    <section id="testimonials" class="position-relative padding-large">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div
              class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center"
            >
              <svg class="chevron-left">
                <use xlink:href="public/assets/icons/icons.svg#chevron-left" />
              </svg>
            </div>
            <div class="swiper testimonial-swiper">
              <div class="quotation text-center">
                <svg class="quote">
                  <use xlink:href="public/assets/icons/icons.svg#quote" />
                </svg>
              </div>
              <div class="swiper-wrapper">
                <div
                  class="swiper-slide text-center d-flex justify-content-center"
                >
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>
                      “¡Los productos de esta web son geniales! Me he vuelto adicta a sus bolsas de tela y sus camisetas. ¡Me encantan!”
                    </blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="public/assets/icons/icons.svg#star-half"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="public/assets/icons/icons.svg#star-empty"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">
                        Emma García
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="swiper-slide text-center d-flex justify-content-center"
                >
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>
                      “Compre una camiseta para mi pareja y le encantó. Ahora siempre que tengo que hacerle un regalo le compro una camiseta de aquí, porque se que es acierto seguro.”
                    </blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="public/assets/icons/icons.svg#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="public/assets/icons/icons.svg#star-half"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="public/assets/icons/icons.svg#star-empty"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">
                        Oscar Martín
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center"
            >
              <svg class="chevron-right">
                <use xlink:href="public/assets/icons/icons.svg#chevron-right" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
    
    <section
      id="instagram"
      class="padding-large overflow-hidden no-padding-top"
    >
      <div class="container">
        <div class="row">
          <div class="display-header text-uppercase text-dark text-center pb-3">
            <h2 class="display-7">Visita nuestro Insta</h2>
          </div>
          <div class="d-flex flex-wrap">
            <figure class="instagram-item pe-2">
              <a
                href="https://templatesjungle.com/"
                class="image-link position-relative"
              >
                <img
                  src="images/insta-item1.jpg"
                  alt="instagram"
                  class="insta-image"
                />
                <div
                  class="icon-overlay position-absolute d-flex justify-content-center"
                >
                  <svg class="instagram">
                    <use xlink:href="public/assets/icons/icons.svg#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a
                href="https://templatesjungle.com/"
                class="image-link position-relative"
              >
                <img
                  src="images/insta-item2.jpg"
                  alt="instagram"
                  class="insta-image"
                />
                <div
                  class="icon-overlay position-absolute d-flex justify-content-center"
                >
                  <svg class="instagram">
                    <use xlink:href="public/assets/icons/icons.svg#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a
                href="https://templatesjungle.com/"
                class="image-link position-relative"
              >
                <img
                  src="images/insta-item3.jpg"
                  alt="instagram"
                  class="insta-image"
                />
                <div
                  class="icon-overlay position-absolute d-flex justify-content-center"
                >
                  <svg class="instagram">
                    <use xlink:href="public/assets/icons/icons.svg#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a
                href="https://templatesjungle.com/"
                class="image-link position-relative"
              >
                <img
                  src="images/insta-item4.jpg"
                  alt="instagram"
                  class="insta-image"
                />
                <div
                  class="icon-overlay position-absolute d-flex justify-content-center"
                >
                  <svg class="instagram">
                    <use xlink:href="public/assets/icons/icons.svg#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a
                href="https://templatesjungle.com/"
                class="image-link position-relative"
              >
                <img
                  src="images/insta-item5.jpg"
                  alt="instagram"
                  class="insta-image"
                />
                <div
                  class="icon-overlay position-absolute d-flex justify-content-center"
                >
                  <svg class="instagram">
                    <use xlink:href="public/assets/icons/icons.svg#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    
    <?php include_once 'view/parts/footer.html'; ?>
    <script src="public/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/script.js"></script>
  </body>
</html>