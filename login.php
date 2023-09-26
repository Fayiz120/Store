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
</head>

<body>

    <nav class="navbar navbar-expand-lg header ">
        <div class="container-fluid ">
            <!-- This Nav bar brand -->
            <div class="container brand-logo">
                <a class="navbar-brand" href="#">
                    <img src="https://seeklogo.com/images/A/adidas-logo-107B082DA0-seeklogo.com.png" alt="Bootstrap"
                        class="logo">
                </a>
            </div>

            <!-- navbar list button for smaller devices -->
            <div class="sections nav-button">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar list items  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="new.html">New arrival</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="kids.html">Kids</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="onam.html">Onam collection</a>
                        </li>



                    </ul>
                </div>

            </div>
            <div class="signup-section">

                <a href="login.html" class="sign-item"> <i class="fa-solid fa-right-to-bracket fa-2xl "
                        style="color: #000000;"></i></a>
                <a href="" class="sign-item"> <i class="fa-solid fa-magnifying-glass fa-2xl"
                        style="color: #000000;"></i></a>
            </div>

        </div>
    </nav>
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
                <span class="account"> Don't have an account?</span> <a href="create.html">Create an Account</a>
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
        session_start();
    
    
    
        $_SESSION["name"] = $row["Name"];
        $_SESSION["user_id"] = $row["id"];


        if ($row["is_admin"] == 1) {
            $_SESSION["is_admin"] = true;
        }   
        
        header("Location: index.php"); // Redirect to a welcome page
    } else {
        // User authentication failed
        echo "Invalid username or password";
    }
}
    
    // Close the database connection    
    $conn->close();
    ?>
    
    <?php
    require_once('templates/footer.php');
    ?>