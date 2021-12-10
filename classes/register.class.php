<?php
    // Load class
    require_once "db.class.php";

    class Register extends DB {
        
        protected function setUser($name, $email, $password) {
            $success = 'success';

            $stmt = $this->connect()->prepare('INSERT INTO users (users_name, users_email, users_pwd) VALUES (?, ?, ?);');
            
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            if (!$stmt->execute(array($name, $email, $hashedPwd))) {
                $stmt = null;
                header('location: ../register.php?error=sqlQueryFailed');
                exit();
            }

            $stmt = null;
            return $success; 
        }

        protected function checkUser($email) {
            $stmt = $this->connect()->prepare('SELECT users_email FROM users WHERE users_email = ?;');
            
            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header('location: ../register.php?error=sqlQueryFailed');
                exit();
            }
            
            $resultCheck;
            if ($stmt->rowCount() >  0) {
                $resultCheck = false;
            }
            else {
                $resultCheck = true;
            }
            return $resultCheck;
        }
    }

?>