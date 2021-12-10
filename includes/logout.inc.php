<?php
    // Destroy session
    session_start();
    session_unset();
    session_destroy();
    // Redirect to homepage
    header("location: ../index.php?error=none");
    exit();
?>