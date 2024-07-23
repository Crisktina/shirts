<?php
class User extends Connection{

    protected function setUser($username, $password, $email){
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?,?,?)");

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email))){
            $error = true;
        }
        $stmt = null;
        return $error;

    }

    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("Location: .../view/signup.html?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if($stmt->rowCount()>0){
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function verifyLoginUser($username, $password){
        $error = 0;
        $stmt = $this->connect()->prepare("SELECT users_pwd from users WHERE users_uid = ?");
        if(!$stmt->execute(array($username))){
            $error = 1;
        }

        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
            $hashedPwd = $res[0]['users_pwd'];
            if(password_verify($password, $hashedPwd)==false){
                $error = 2;
            }else{
                $_SESSION["username"] = $username;
            }
        }else{
            $error = 2;
        }
        $stmt = null;
        return $error;

    }
    //traer el id y el username del usuario de la bbdd 
    protected function getUser($username) {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT users_id, users_uid FROM users WHERE users_uid = ?;");
            $results = [];
    
            // Execute the statement
            if (!$stmt->execute(array($username))) {
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
