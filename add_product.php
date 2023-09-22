<?php

require_once('templates/conn.php');


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_id = $_POST["category_id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $url = $_POST["url"];


    // Insert product details into the database
    $sql = "INSERT INTO products (category_id, name, price, url) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $category_id, $name, $price, $url);

    if ($stmt->execute()) {
        header("location:products.php");
    } else {
        echo "Error adding product: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
