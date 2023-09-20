<?php
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


if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE id=$product_id";

    if ($conn->query($sql) === TRUE) {
        // Product deleted successfully
        header("Location: products.php"); // Redirect to the product list page
        exit();
    } else {
        // Error deleting product
        echo "Error: " . $conn->error;
    }
} else {
    // Invalid request
    echo "Invalid request.";
}

// Include your HTML and confirmation message here
?>
