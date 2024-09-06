<?php
class Lineaspedido extends Connection
{

    protected function setLineasPedido($pedidoid, $prodId, $quantity, $importPrice)
    {
        try {
            // Preparar la consulta SQL
            $stmt = $this->connect()->prepare("INSERT INTO lineaspedido (pedido_id, prod_id, quantity, import_price) VALUES (?,?,?,?)");

            // Ejecutar la consulta
            return $stmt->execute([$pedidoid, $prodId, $quantity, $importPrice]);
        } catch (PDOException $e) {
            // Registrar cualquier error y retornar false
            error_log("Error al insertar línea de pedido: " . $e->getMessage());
            return false;
        } finally {
            $stmt = null;
        }
    }
}
