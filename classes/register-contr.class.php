<?php
    // Load class
    require_once "register.class.php";
    
    class RegisterController extends Register {

        private $email;
        private $name;
        private $password;
        private $confirmPassword;

        public function __construct($name, $email, $password, $confirmPassword) {
            $this->email = $email;
            $this->name = $name;
            $this->password = $password;
            $this->confirmPassword = $confirmPassword;
        }

        public function registerUser() {
            if ($this->emptyInput() == false) {
                header('location: ../register.php?error=emptyInput');
                exit();
            }
            if ($this->validEmail() == false) {
                header('location: ../register.php?error=invalidEmail');
                exit();
            }
            if ($this->passwordMatch() == false) {
                header('location: ../register.php?error=passwordsDoNotMatch');
                exit();
            }
            if ($this->emailTaken() == false) {
                header('location: ../register.php?error=emailAlreadyTaken');
                exit();
            }
            // Register user information
            $this->setUser($this->name, $this->email, $this->password);
        }

        private function emptyInput() {
            $result;
            if (empty($this->email) || empty($this->name) || empty($this->password) || empty($this->confirmPassword)) {
                $result = false;   
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function validEmail() {
            $result;
            if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = true;
            }
            else {
                $result = false;
            }
            return $result;
        }

        private function passwordMatch() {
            $result;
            if ($this->password !== $this->confirmPassword) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }

        private function emailTaken() {
            $result;
            if (!$this->checkUser($this->email)) {
                $result = false;
            }
            else {
                $result = true;
            }
            return $result;
        }
    }
?>