<?php
require_once('templates/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];

    // Delete the product from the database
    $sql = "DELETE FROM products WHERE product_id=$product_id";

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
