<?php
    include_once 'header.php';
?>

        <div class="content-wrapper">
            <h1>
                <?php
                    if (isset($_SESSION["user_name"]) && isset($_SESSION["user_id"])) {
                        echo "Welcome, " . $_SESSION["user_name"];
                        echo "Your ID is: " . $_SESSION["user_id"];
                    }
                    else {
                        echo "Please log in or sign up";
                    }
                ?>
            </h1>
        </div>

<?php
    include_once 'footer.php';
?> 