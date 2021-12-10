<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css"/>
        <title>Login System Prototype</title>
    </head>
    <body>
        <div class="content-container">
            <div class="nav-wrapper">
                <nav class="nav">
                    <div class="logo-wrapper">
                        <li class="nav-link-item logo"><a href="index.php"><h1>LG</h1></a></li>
                    </div>
                    <ul class="nav-links">
                        <li class="nav-link-item"><a href="index.php">Home</a></li>
                        <?php
                            if (isset($_SESSION["user_id"])) {
                                echo "<li class='nav-link-item'><a href='index.php'>Profile</a></li>";
                                echo "<li class='nav-link-item'><a href='./includes/logout.inc.php'>Log out</a></li>";
                            }
                            else {
                                echo "<li class='nav-link-item'><a href='login.php'>Login</a></li>";
                                echo "<li class='nav-link-item'><a href='register.php'>Register</a></li>";
                            };
                        ?>
                    </ul>
                </nav>
            </div>