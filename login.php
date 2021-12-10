<?php
    include_once 'header.php';
?>
        <div class="content-wrapper">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1 class="title">Login Form</h1>
                </div>
                <div class="form-content">
                    <form class="form" action="includes/login.inc.php" method="POST">
                        <div class="form-group">
                            <label for="email">
                                <input type="email" name="email" placeholder="Email" id="email">
                            </label>
                            <label for="pwd">
                                <input type="password" name="pwd" placeholder="Password" id="pwd">
                            </label>
                        </div>
                        <div class="form-group-buttons">
                            <button class="form-button" type="submit" name="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="form-link-grop">
                    <span class="form-link">Dont't have an account? <a href="register.php">Sign Up</a></span>
                </div>
            </div>
        </div>

<?php
    include_once 'footer.php';
?> 