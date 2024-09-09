-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 06-09-2024 a las 11:47:30
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shirt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE `lineaspedido` (
  `linea_id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `import_price` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lineaspedido`
--

INSERT INTO `lineaspedido` (`linea_id`, `pedido_id`, `prod_id`, `quantity`, `import_price`) VALUES
(1, 1, 1, 2, '25.98'),
(2, 1, 2, 1, '12.99'),
(3, 2, 3, 1, '12.99'),
(4, 3, 11, 1, '7.99'),
(6, 32, 10, 1, '12.99'),
(7, 32, 3, 2, '25.98');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `pedido_id` int(11) NOT NULL,
  `pedido_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` decimal(11,2) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `pedido_date`, `total_price`, `user_id`) VALUES
(1, '2024-08-29 19:11:28', '38.97', 9),
(2, '2024-08-29 19:11:28', '12.99', 10),
(3, '2024-08-29 19:11:28', '7.99', 9),
(32, '2024-09-06 11:19:33', '38.97', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `prod_id` int(11) NOT NULL,
  `prod_category` int(2) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_color` text NOT NULL,
  `prod_price` float(100,2) NOT NULL,
  `prod_photo` varchar(500) NOT NULL,
  `prod_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_id`, `prod_category`, `prod_name`, `prod_color`, `prod_price`, `prod_photo`, `prod_description`) VALUES
(1, 0, 'Quilombo', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item1.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(2, 0, 'Plants', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item2.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(3, 0, 'Visto', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item3.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(4, 0, 'Linea', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item4.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(5, 0, 'Way', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item5.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(6, 0, 'my god', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item6.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(7, 0, 'Easy', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item7.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(8, 0, 'What', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item8.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(9, 0, 'Bondi', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item9.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(10, 0, 'Pilas', 'Blanco y negro', 12.99, 'public\\assets\\images\\productos\\camisetas\\camiseta-item10.jpg', 'Camiseta de manga corta de algodón 100%. Estampada con una frase divertida que la hace ideal para lucir en cualquier ocasión un estilo informal y desenfadado.'),
(11, 1, 'Quilombo', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item1.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(12, 1, 'Plants', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item2.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(13, 1, 'Visto', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item3.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(14, 1, 'Linea', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item4.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(15, 1, 'Way', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item5.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(16, 1, 'my god', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item6.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(17, 1, 'Easy', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item7.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(18, 1, 'What', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item8.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(19, 1, 'Bondi', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item9.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(20, 1, 'Pilas', 'Veig y negro', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item10.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.'),
(21, 1, 'Pilas', 'Negro y blanco', 7.99, 'public\\assets\\images\\productos\\totebags\\totebag-item11.jpg', 'Totebag de algodón 100% con estampados divertidos y frases ingeniosas que dan estilo a tu personalidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL,
  `shop_name` text NOT NULL,
  `shop_city` text NOT NULL,
  `shop_address` varchar(500) NOT NULL,
  `shop_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shops`
--

INSERT INTO `shops` (`shop_id`, `shop_name`, `shop_city`, `shop_address`, `shop_photo`) VALUES
(1, 'Anoiafoto', 'Igualada', 'c/ Masquefa, 16', 'public\\assets\\images\\shops\\shop1.jpg'),
(2, 'Tiger', 'Barcelona', 'Rambla, 15', 'public\\assets\\images\\shops\\shop2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`stock_id`, `prod_id`, `stock_quantity`, `shop_id`) VALUES
(1, 1, 10, 1),
(2, 2, 10, 1),
(3, 1, 11, 2),
(4, 2, 12, 2),
(5, 3, 0, 1),
(6, 4, 0, 2),
(7, 5, 0, 1),
(8, 6, 4, 2),
(9, 7, 5, 1),
(10, 8, 68, 2),
(11, 9, 9, 2),
(12, 10, 45, 1),
(13, 11, 64, 2),
(14, 12, 2, 1),
(15, 13, 34, 2),
(16, 14, 23, 1),
(17, 15, 12, 2),
(18, 16, 12, 1),
(19, 17, 3, 2),
(20, 18, 4, 2),
(21, 19, 45, 1),
(22, 20, 12, 1),
(23, 21, 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) NOT NULL,
  `user_nickname` varchar(20) NOT NULL,
  `user_pwd` longtext NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `user_fullname` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `token` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `user_nickname`, `user_pwd`, `user_mail`, `user_fullname`, `status`, `token`, `created_at`) VALUES
(9, 'admin', '$2y$10$FQ.hXEh51pbvhUTo6z.nd.6iO.3clwmrJkIwXNTHFTxkTqgN9ogiu', 'crishidalgolopez@gmail.com', 'crishhh', 1, '0cae3e34d86798b30d0f76c881ef37a429ae7f39f78260f74317c05c792d4424', NULL),
(10, 'admin2', '$2y$10$HMkvuZSLyfwJKyodvkHrNODfcTOf2JAv5u/yV86yIrESbyAr4LQgS', 'falso@gmail.com', 'otrio', 1, NULL, '2024-08-26 14:27:51'),
(11, 'cris', '$2y$10$H/bwqK5.rTVPn8pJFwKyEulQQDdcNMB84B.0Zfystl7ERk3x9GSKS', 'cristina.hidalgo33@gmail.com', 'Cristina Hidalgo Lopez', 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
  ADD PRIMARY KEY (`linea_id`),
  ADD KEY `pedido` (`pedido_id`),
  ADD KEY `producto` (`prod_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `pedido_user` (`user_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indices de la tabla `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`),
  ADD KEY `producto_shop` (`prod_id`),
  ADD KEY `stock_shop` (`shop_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
  MODIFY `linea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
  ADD CONSTRAINT `pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`pedido_id`),
  ADD CONSTRAINT `producto` FOREIGN KEY (`prod_id`) REFERENCES `productos` (`prod_id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedido_user` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`user_id`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `producto_shop` FOREIGN KEY (`prod_id`) REFERENCES `productos` (`prod_id`),
  ADD CONSTRAINT `stock_shop` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
