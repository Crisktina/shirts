<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php?nosesion");
    exit();
}
include_once 'parts/head.html';
?>

<body data-bs-smooth-scroll="true" tabindex="0">
    <?php include_once 'parts/header.php'; ?>
    <section class="bg-light-blue overflow-hidden mt-5 pt-5">
        <div class="row d-flex flex-wrap align-items-center">
            <div class="col-md-6 col-sm-12">
                <div class="text-content offset-4 padding-small">
                    <h2 class="display-2 pb-5 text-uppercase text-dark">
                        Pedido en curso
                    </h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12"></div>
        </div>
    </section>
    <section class="shopify-cart padding-large">
        <div class="container">
            <div class="row">
                <div class="cart-table">
                    <div class="cart-header">
                        <div class="row d-flex text-uppercase">
                            <h3 class="cart-title col-lg-4 pb-3">Producto</h3>
                            <h3 class="cart-title col-lg-3 pb-3">Cantidad</h3>
                            <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
                        </div>
                    </div>
                    <?php
                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])):
                        $totalPrice = array_sum(array_column($_SESSION['cart'], 'import_price'));
                        require "../includes/autoload.models.php";
                        require "../includes/autoload.controlers.php";
                        foreach ($_SESSION['cart'] as $item):
                            $objeto =  new ProductContr();
                            $productDetails = $objeto->getProductById($item['prod_id']);
                            $product = $productDetails[0];
                            $subtotal = $item['quantity'] * $product['prod_price'];
                    ?>
                            <div class="cart-item border-top border-bottom padding-small">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                                            <div class="col-lg-5">
                                                <div class="card-image">
                                                    <img src="../<?= htmlspecialchars($product['prod_photo']) ?>" alt="<?= htmlspecialchars($product['prod_name']) ?>" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-detail ps-3">
                                                    <h3 class="card-title text-uppercase">
                                                        <a href="productdetail.php?id=<?= htmlspecialchars($item['prod_id']); ?>"><?= htmlspecialchars($product['prod_name']) ?></a>
                                                    </h3>
                                                    <div class="card-price">
                                                        <span class="money text-primary"><?= htmlspecialchars($product['prod_price']) ?>€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="qty-field">
                                                    <div class="input-group product-qty">
                                                        <h3 class="qty-field text-uppercase">
                                                            <?= htmlspecialchars($item['quantity']) ?>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="total-price">
                                                    <span class="money text-primary"><?= htmlspecialchars($subtotal) ?>€</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <form action="../includes/add-to-cart.php" method="POST">
                                            <input type="hidden" name="prod_id" value="<?= htmlspecialchars($item['prod_id']) ?>">
                                            <div class="cart-remove">
                                                <button class="border-0 bg-transparent" type="submit" name="eliminar">
                                                    <svg class="close" width="38px">
                                                        <use xlink:href="../public/assets/icons/icons.svg#close"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
                <div class="cart-totals bg-grey padding-medium">
                    <div class="total-price pb-5">
                        <table cellspacing="0" class="table text-uppercase">
                            <tbody>
                                <tr class="order-total pt-2 pb-2 border-bottom">
                                    <th>Total</th>
                                    <td data-title="Total">
                                        <span class="price-amount amount text-primary ps-5">
                                            <bdi><?= htmlspecialchars($totalPrice) ?><span class="price-currency-symbol">€</span></bdi>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="button-wrap">
                        <form action="../includes/add-to-cart.php" method="POST">
                            <button type="submit" name="submit_cart" class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Finalizar pedido</button>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
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