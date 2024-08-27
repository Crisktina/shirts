<?php
class Products extends Connection
{

    // DDBB information:
    // prod_category 
    // ---> 0 = camisetas
    // ---> 1 = totebags

    //traer lista de camisetas de la bbdd 
    protected function getShirts()
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE prod_category = 0;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array())) {
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
    //traer lista de totebags de la bbdd 
    protected function getTotebags()
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE prod_category = 1;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array())) {
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

    protected function getSingleProduct($productId)
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT * 
                    FROM productos AS p
                    INNER JOIN stock AS s ON p.prod_id = s.prod_id
                    INNER JOIN shops AS sh ON s.shop_id = sh.shop_id
                    WHERE p.prod_id = ?;;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array($productId))) {
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
