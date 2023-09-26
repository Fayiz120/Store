<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to another page (e.g., dashboard or home page)
    header("Location: index.php");
    exit();
}
?>
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
            <h2>Login</h2>
            <form action="" method="POST">
                <input type="text" placeholder="username" name="username" id="username">
                <input type="password" placeholder="password" name="password" id="password">
                <input type="submit" value="Login" >
            </form>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="create-account">
                <span class="account"> Don't have an account?</span> <a href="create.php">Create an Account</a>
            </div>
        </div>
    </div>

    <?php

    require_once('templates/conn.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Secure the input (prevent SQL injection)
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    
    // Query to check if the user exists in the database
    $sql = "SELECT * FROM user WHERE email='$username' AND password='$password'";
    $result = $conn->query($sql);
    
    if ($result === false) {
        echo "Error executing query: " . $conn->error;
        exit();
    }
    
    if ($result->num_rows == 1) {
        // User authentication successful
        $row = $result->fetch_assoc();

    
    
    
        $_SESSION["name"] = $row["Name"];
        $_SESSION["user_id"] = $row["id"];


        if ($row["is_admin"] == 1) {
            $_SESSION["is_admin"] = true;
        }   
        
        header("Location: index.php"); 
    } else {
        echo "Invalid username or password";
    }
}
       
    $conn->close();
    ?>
    
    <?php
    require_once('templates/footer.php');
    ?>