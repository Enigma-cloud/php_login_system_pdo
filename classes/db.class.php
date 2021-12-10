<?php
    class DB {
        
        protected function connect() {
            try {
                $username = "root";
                $password = "";
                // Make sure to put your database name in the string
                $dbHandler = new PDO('mysql:host=localhost;dbname=', $username, $password);
                return $dbHandler;
            }
            catch (PDOException $err) {
                echo "Error occurred: " . $err;
                die();
            }

        }
    }
?>