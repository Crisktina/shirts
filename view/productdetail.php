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

    <div class="container single-product">
      <!-- Información del Producto -->
      <div class="row product-info">
        <div class="col-12">
          <h4 class="item-title">Nombre del Producto</h4>
          <div class="rating">
            <svg class="star-fill" width="16" height="16"><!-- SVG content here --></svg>
            <!-- Más estrellas según sea necesario -->
          </div>
          <ul class="select-list">
            <li class="select-item">Opción 1</li>
            <li class="select-item">Opción 2</li>
            <!-- Más opciones según sea necesario -->
          </ul>
        </div>
      </div>

      <!-- Cantidad del Producto -->
      <div class="row product-quantity">
        <div class="col-12">
          <div class="input-group">
            <button class="btn-number" data-type="minus" data-field="quantity">-</button>
            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
            <button class="btn-number" data-type="plus" data-field="quantity">+</button>
          </div>
          <div class="stock-number">Stock: 10 unidades</div>
        </div>
      </div>

      <!-- Pestañas de Información del Producto -->
      <div class="row product-info-tabs">
        <div class="col-12">
          <div class="tabs-listing">
            <button class="btn btn-secondary">Descripción</button>
            <button class="btn btn-secondary">Opiniones</button>
            <button class="btn btn-secondary">Especificaciones</button>
          </div>
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#description" data-toggle="tab">Descripción</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reviews" data-toggle="tab">Opiniones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#specs" data-toggle="tab">Especificaciones</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="description">
              <p>Detalles del producto...</p>
            </div>
            <div class="tab-pane" id="reviews">
              <p>Opiniones del producto...</p>
            </div>
            <div class="tab-pane" id="specs">
              <p>Especificaciones del producto...</p>
            </div>
          </div>
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
