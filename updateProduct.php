<?php
require_once('templates/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])) {
    $product_id = $_POST["product_id"];
    $category_id = $_POST["category_id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $url = $_POST["url"];


    $sql = "UPDATE products SET category_id='$category_id', name='$name', price='$price', url='$url' WHERE product_id=$product_id";
    if ($conn->query($sql) === TRUE) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {

    echo "Invalid request.";
}

?>