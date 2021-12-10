<?php
    // Load classes
    require_once "../classes/db.class.php";
    require_once "../classes/register-contr.class.php";
    require_once "../classes/register.class.php";
    require_once '../classes/login.class.php';

    $prev_page = "register.php";

    if (isset($_POST["submit"])) {
        // Get registration data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["pwd"];
        $confirmPassword = $_POST["confirmPwd"];
        // Instantiate RegisterController Class
        $registration = new RegisterController($name, $email, $password, $confirmPassword);
        // Validate data and register the user into the database
        $registration->registerUser();
        // After successful registration, redirect to homepage
        header('location: ../login.php?error=none');
        exit();
    }
    else {
        header("location: ../" . $prev_page);
        exit();
    };
?>