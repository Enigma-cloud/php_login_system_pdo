<?php
    include_once 'header.php';
?>
        <div class="content-wrapper">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1 class="title">Registration Form</h1>
                </div>
                <div class="form-content">
                    <form class="form" action="includes/register.inc.php" method="POST">
                        <div class="form-group">
                            <label for="name">
                                <input type="text" name="name" placeholder="Name" id="name"> 
                            </label>
                            <label for="email">
                                <input type="email" name="email" placeholder="Email" id="email">
                            </label>
                            <label for="pwd">
                                <input type="password" name="pwd" placeholder="Password" id="pwd">
                            </label>
                            <label for="confirmPwd">
                                <input type="password" name="confirmPwd" placeholder="Confirm Password" id="confirmPwd">
                            </label>
                        </div>
                        <div class="form-group-buttons">
                            <button class="form-button" type="submit" name="submit">Registration</button>
                        </div>
                    </form>
                </div>

                <div class="form-link-group">
                    <span class="form-link">Have an account? <a href="login.php">Sign In</a></span>
                </div>
            </div>
        </div>

<?php
    include_once 'footer.php';
?> 