<?php
    // Load classes
    require_once "../classes/db.class.php";
    require_once "../classes/login-contr.class.php";
    require_once "../classes/login.class.php";

    $prev_page = "login.php";

    if (isset($_POST["submit"])) {
        // Get login data
        $email = $_POST["email"];
        $password = $_POST["pwd"];
        // Instantiate LoginController Class
        $login = new LoginController($email, $password);
        // Validate data and login
        $login->loginUser();
        // After successful login, redirect to homepage
        header('location: ../index.php?error=none');
        exit();
    }
    else {
        header("location: ../" . $prev_page);
        exit();
    };
?>