<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
<header
  id="header"
  class="site-header header-scrolled fixed-top text-black bg-light">
  <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <img src="images/main-logo.png" class="logo" />
      </a>
      <button
        class="navbar-toggler d-flex d-lg-none order-3 p-2"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#bdNavbar"
        aria-controls="bdNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <svg class="navbar-icon">
          <use xlink:href="../public/assets/icons/icons.svg#navbar-icon"></use>
        </svg>
      </button>
      <div
        class="offcanvas offcanvas-end"
        tabindex="-1"
        id="bdNavbar"
        aria-labelledby="bdNavbarOffcanvasLabel">
        <div class="offcanvas-header px-4 pb-0">
          <a class="navbar-brand" href="../index.php">
            <img src="images/main-logo.png" class="logo" />
          </a>
          <button
            type="button"
            class="btn-close btn-close-black"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
            data-bs-target="#bdNavbar"></button>
        </div>
        <div class="offcanvas-body">
          <ul
            id="navbar"
            class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link me-4 <?= ($currentPage == 'products.php') ? 'active' : '' ?>" href="products.php">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 <?= ($currentPage == 'ourshops.php') ? 'active' : '' ?>" href="ourshops.php">Nuestras tiendas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-4 <?= ($currentPage == 'mispedidos.php') ? 'active' : '' ?>" href="mispedidos.php">Mis pedidos</a>
            </li>
            <?php
            require '../model/env.php';
            if (isset($_SESSION['username'])): ?>
              <li class="nav-item">
                <a class="nav-link user-items  ps-2 <?= ($currentPage == 'profile.php') ? 'active' : '' ?>" href="profile.php">
                  <?php if (isset($_SESSION['username'])) {
                    echo htmlspecialchars($_SESSION['username']);
                  }; ?>
                  <svg>
                    <use xlink:href="../public/assets/icons/icons.svg#user"></use>
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link user-items ps-2 me-4" href="<?= env::HOSTPATH . 'includes/logout.php' ?>">
                  <svg>
                    <use xlink:href="../public/assets/icons/icons.svg#logout"></use>
                  </svg>
                </a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link me-4 <?= ($currentPage == 'login.php') ? 'active' : '' ?>" href="<?= env::HOSTPATH . 'view/login.php' ?>">
                  Iniciar sesión
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>