<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- googlefont link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&family=Rubik&family=Ubuntu&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
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