<?php
require_once('templates/header.php')
?>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <?php
    require_once('templates/header2.php');
    ?>
    <div class="form-div">

        <div class="login-container">
            <h2>create Account</h2>
            <form action="signup.php" method="POST">
                <input type="text" placeholder="First Name" name="name" required>
                <input type="Email" placeholder="Email" name="email" required>
                <input type="number" placeholder="Phone number" name="number" required>
                <input type="text" name="address" placeholder="address" id="">
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="confirm" name="confirm" required>
                <input type="submit" value="Login">
            </form>
            <div class="create-account">
                <span class="account"> Already have account?</span> <a href="login.php">Login</a>
            </div>
        </div>
    </div>


    <?php
    require_once('templates/footer.php');
    ?>