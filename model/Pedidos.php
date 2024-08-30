<?php
class Pedidos extends Connection
{

    protected function setPedido($totalprice, $userid)
    {
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO pedidos (total_price, user_id) VALUES (?,?)");

        if (!$stmt->execute(array($totalprice, $userid))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    //traer lista de pedidos de la bbdd 
    protected function getPedidos($userid)
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT * FROM pedidos WHERE user_id = ?;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array($userid))) {
                // Log the error if execution fails
                error_log("Failed to execute query: " . implode(", ", $stmt->errorInfo()));
                $stmt = null;
                return $results;
            }

            // Fetch and return the results as an associative array
            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            // Close the statement
            $stmt = null;
            return $results;
        } catch (PDOException $e) {
            // Log any exceptions
            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }

    //traer lista de pedidos de la bbdd 
    protected function getSinglePedido($pedidoId)
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT p.pedido_id, p.pedido_date, p.total_price, pr.prod_name, pr.prod_price, pr.prod_photo, l.quantity, l.import_price AS subtotal 
            FROM pedidos AS p
            INNER JOIN lineaspedido AS l ON l.pedido_id = p.pedido_id 
            INNER JOIN productos AS pr ON pr.prod_id = l.prod_id
            WHERE p.pedido_id = ?;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array($pedidoId))) {
                // Log the error if execution fails
                error_log("Failed to execute query: " . implode(", ", $stmt->errorInfo()));
                $stmt = null;
                return $results;
            }

            // Fetch and return the results as an associative array
            if ($stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }

            // Close the statement
            $stmt = null;
            return $results;
        } catch (PDOException $e) {
            // Log any exceptions
            error_log("Database error: " . $e->getMessage());
            return [];
        }
    }
}
