<?php

require_once('templates/conn.php');

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
    
    header("Location: index.php"); // Redirect to a welcome page
} else {
    // User authentication failed
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}

// Close the database connection    
$conn->close();
?>
