<?php
    // Load class
    require_once "db.class.php";

    class Login extends DB {
        
        protected function getUser($email, $password) {
            $stmt = $this->connect()->prepare('SELECT users_email, users_pwd FROM users WHERE users_email = ?;');
            
            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header('location: ../login.php?error=sqlQueryFailed');
                exit();
            }
            // Check results
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=userNotFoundCheckEmail");
                exit();
            }
            
            // Check if password matches account
            // Fetch all takes in an arguement that specifies the data structure to be returned
            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($password, $pwdHashed[0]["users_pwd"]);
            if ($checkPwd == false) {
                $stmt = null;
                header('location: ../login.php?error=incorrectPassword');
                exit();
            }
            else if ($checkPwd == true) {
                $stmt = $this->connect()->prepare('SELECT users_id, users_name FROM users WHERE users_email = ?;');

                if (!$stmt->execute(array($email))) {
                    $stmt = null;
                    header('location: ../login.php?error=sqlQueryFailed');
                    exit();
                }
                // Check results, should not trigger unless the database couldn't send the corretct information
                if ($stmt->rowCount() == 0) {
                    $stmt = null;
                    header("location: ../login.php?error=noUserDataReceived");
                    exit();
                }

                // Login user
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // If login successful, start session and set session variables
                session_start();
                $_SESSION["user_id"] = $user[0]["users_id"];
                $_SESSION["user_name"] = $user[0]["users_name"];
            }
            $stmt = null;
        }

    }
?>