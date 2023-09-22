<?php
// Database connection configuration
require_once('templates/conn.php');

// Retrieve user input from the registration form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm'];

// Ensure password and confirm password match
if ($password != $confirmPassword) {
    echo "Password and Confirm Password do not match. <a href='create.html'>Try again</a>";
    exit();
}

// Hash the password for security

// Secure the input (prevent SQL injection)
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$address = mysqli_real_escape_string($conn, $address);

// Check if the email is already registered
$checkEmailQuery = "SELECT * FROM user WHERE email='$email'";
$result = $conn->query($checkEmailQuery);
if ($result->num_rows > 0) {
    echo "Email address is already registered. <a href='create.html'>Try again</a>";
    exit();
}

// Insert user registration data into the database
$insertQuery = "INSERT INTO user (name, email, Phone_Number, address, password) VALUES ('$name', '$email', '$phone', '$address', '$password')";
if ($conn->query($insertQuery) === TRUE) {
    echo "Registration successful! <a href='login.html'>Login</a>";
} else {
    echo "Error: " . $insertQuery . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
