<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page if they are not logged in
    header("Location: login.html");
    exit();
}

require_once('templates/conn.php');

if (isset($_GET['product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['product_id'];

    // Check if the product is already in the user's cart
    $sql = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // The product is already in the cart; increment the quantity
        $row = $result->fetch_assoc();
        $quantity = $row['quantity'] + 1;
        $updateSql = "UPDATE cart SET quantity = $quantity WHERE id = " . $row['id'];
        $conn->query($updateSql);
    } else {
        // The product is not in the cart; add it
        $insertSql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
        $conn->query($insertSql);
    }
}

// Redirect the user to their cart page or product page
header("Location: new.php"); // Replace 'cart.php' with the desired destination
exit();
?>
