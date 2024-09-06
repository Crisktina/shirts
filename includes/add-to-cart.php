<?php
session_start();
//print_r($_SESSION);

// Si no existe el carrito en la sesión, inicializarlo
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['userID'])) {

    // Instanciar las clases
    require "autoload.models.php";
    require "autoload.controlers.php";


    $userId = $_SESSION['userID'];



    // Añadir producto al carrito
    if (isset($_POST['add-to-cart'])) {
        // Recoger datos del formulario desde productdetail
        $productId = intval($_POST['productid']);
        $quantity = intval($_POST['quantity']);

        // Obtener el precio del producto de la base de datos para evitar manipulaciones del lado del cliente
        $object = new ProductContr();
        $productdb = $object->getProductById($productId);
        $prodPrice = floatval($productdb[0]['prod_price']);
        $importPrice = $prodPrice * $quantity;

        $found = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['prod_id'] == $productId) {
                $item['quantity'] += $quantity;
                $item['import_price'] += $importPrice;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $_SESSION['cart'][] = [
                'prod_id' => $productId,
                'quantity' => $quantity,
                'import_price' => $importPrice
            ];
        }

        header("Location: ../view/pedidoencurso.php?success-add-to-cart");
        exit();
    }

    // Eliminar producto del carrito
    if (isset($_POST['eliminar'])) {
        $productId = intval($_POST['prod_id']);

        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($item) use ($productId) {
                return $item['prod_id'] !== $productId;
            });
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindexar el array
        }

        header("Location: ../view/pedidoencurso.php?success-delete");
        exit();
    }

    // Procesar pedido
    if (isset($_POST['submit_cart'])) {
        $totalPrice = 0;
        foreach ($_SESSION['cart'] as &$item) {
            $object = new ProductContr();
            $productdb = $object->getProductById($item['prod_id']);
            $item['import_price'] = floatval($productdb[0]['prod_price']) * $item['quantity'];
            $totalPrice += $item['import_price'];
        }
        unset($item);

        // Insertar el pedido en la base de datos
        $submitPedido = new PedidosContr($totalPrice, $userId);
        $pedidoId = $submitPedido->newPedido();

        // Validar el ID del pedido 
        if ($pedidoId === false || $pedidoId == 0) {
            error_log("Invalid pedidoId: $pedidoId");
            header("Location: ../view/mispedidos.php?error=InvalidPedidoId");
            exit();
        }

        // Insertar las líneas del pedido en la base de datos
        foreach ($_SESSION['cart'] as $item) {
            $submitLineaPedido = new LineaspedidoContr($pedidoId, $item['prod_id'], $item['quantity'], $item['import_price']);
            $submitLineaPedido->newLineaPedido();
        }

        // Vaciar el carrito y redirigir a la página de mis pedidos
        unset($_SESSION['cart']);
        header("Location: ../view/mispedidos.php?success-confirm-cart");
        exit();
    }
}
