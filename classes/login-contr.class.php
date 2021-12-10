<?php
    // Load class
    require_once "login.class.php";

    class LoginController extends Login {

        private $email;
        private $password;

        public function __construct($email, $password) {
            $this->email = $email;
            $this->password = $password;
        }

        public function loginUser() {
            if (!$this->emptyInput()) {
                header('location: ../login.php?error=emptyInput');
                exit();
            }

            $this->getUser($this->email, $this->password);
        }

        private function emptyInput() {
            $result;
            if (empty($this->email) || empty($this->password)) {
                $result = false;   
            }
            else {
                $result = true;
            }
            return $result;
        }
    }
?>