<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "shop";
// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
    header("Location: index.php"); // Redirect to a welcome page
} else {
    // User authentication failed
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}

// Close the database connection    
$conn->close();
?>
