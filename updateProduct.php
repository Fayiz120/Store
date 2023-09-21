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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    $category_id = $_POST["category_id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $url = $_POST["url"];

    // Update the product in the database
    $sql = "UPDATE products SET category_id='$category_id', name='$name', price='$price', url='$url' WHERE product_id=$product_id";
    if ($conn->query($sql) === TRUE) {
        // Product updated successfully
        header("Location: products.php"); // Redirect to the product list page
        exit();
    } else {
        // Error updating product
        echo "Error: " . $conn->error;
    }
} else {
    // Invalid request
    echo "Invalid request.";
}

// Include your HTML and confirmation message here
?>
