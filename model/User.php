<?php
class User extends Connection
{

    protected function setUser($username, $password, $email, $userfullname, $token)
    {
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO usuarios (user_nickname, user_pwd, user_mail, user_fullname, token) VALUES (?,?,?,?,?)");

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $hashedPwd, $email, $userfullname, $token))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function checkUser($username, $email)
    {
        $error = 0;
        $stmt = $this->connect()->prepare("SELECT user_nickname FROM usuarios WHERE user_nickname = ? OR user_mail = ?;");
        if (!$stmt->execute(array($username, $email))) {
            $error = 1;
        }
        if ($stmt->rowCount() > 0) {
            $error = 2;
        }
        $stmt = null;
        return $error;
    }

    protected function verifyLoginUser($username, $password)
    {
        $error = 0;
        $stmt = $this->connect()->prepare("SELECT user_pwd from usuarios WHERE user_nickname = ? and status=?");
        $status = 1;
        if (!$stmt->execute(array($username, $status))) {
            $error = 1;
        }

        if ($stmt->rowCount() > 0) {
            $res = $stmt->fetchAll();
            $hashedPwd = $res[0]['user_pwd'];
            if (password_verify($password, $hashedPwd) == false) {
                $error = 2;
            } else {
                $_SESSION["username"] = $username;
            }
        } else {
            $error = 2;
        }
        $stmt = null;
        return $error;
    }


    protected function setTokenUser($token, $email)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set token= ? where user_mail = ?");

        if (!$stmt->execute(array($token, $email))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function setNewPassword($token, $password)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set user_pwd= ?, token=null, created_at=null where token = ?");

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute(array($hashedPwd, $token))) {
            $error = true;
        }

        $stmt = null;
        return $error;
    }

    protected function setStatus($token)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set status= ?, token=null, created_at=null where token = ?");
        $status = 1;
        if (!$stmt->execute(array($status, $token))) {
            $error = true;
        }

        $stmt = null;
        return $error;
    }

    protected function checkUserByEmail($email)
    {
        $stmt = $this->connect()->prepare("SELECT user_nickname FROM usuarios WHERE user_mail = ?;");
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("Location: ../views/forgotpassword.php?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function checkToken($token)
    {
        $stmt = $this->connect()->prepare("SELECT user_nickname FROM usuarios WHERE token = ?;");
        if (!$stmt->execute(array($token))) {
            $stmt = null;
            header("Location: ../view/newpassword.php?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function checkTokenExpired($token)
    {
        $stmt = $this->connect()->prepare("SELECT timestampdiff(MINUTE, created_at, now())as diff FROM usuarios WHERE token = ?;");
        if (!$stmt->execute(array($token))) {
            $stmt = null;
            header("Location: ../view/newpassword.php?error=stmtfailed");
            exit();
        }
        $diff = -1;
        if ($stmt->rowCount() > 0) {
            $res = $stmt->fetchAll();
            $diff = $res[0]['diff'];
        }

        return $diff;
    }

    //traer datos del usuario de la bbdd para almacenar en session
    protected function getUser($username, $email, $userfullname)
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->connect()->prepare("SELECT user_id, user_nickname, user_mail, user_fullname FROM usuarios WHERE user_nickname = ? OR user_mail=? OR user_fullname=?;");
            $results = [];

            // Execute the statement
            if (!$stmt->execute(array($username, $email, $userfullname))) {
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

    //modificar datos del usuario desde el perfil
    protected function setNewNickname($username, $userId)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set user_nickname= ? where user_id = ?");

        if (!$stmt->execute(array($username, $userId))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }
    //modificar datos del usuario desde el perfil
    protected function setNewEmail($email, $userId)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set user_mail= ? where user_id = ?");

        if (!$stmt->execute(array($email, $userId))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }
    //modificar datos del usuario desde el perfil
    protected function setNewFullname($userfullname, $userId)
    {
        $error = false;
        $stmt = $this->connect()->prepare("UPDATE usuarios set user_fullname= ? where user_id = ?");

        if (!$stmt->execute(array($userfullname, $userId))) {
            $error = true;
        }
        $stmt = null;
        return $error;
    }
}
