<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); 
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "shop";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql ="SELECT c.quantity, p.name, p.price FROM cart c
INNER JOIN products p ON c.product_id = p.product_id
WHERE c.user_id = $user_id";
$result = $conn->query($sql);
if (!$result) {
    die("SQL query failed: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Add your CSS styling here -->
</head>

<body>
    <h1>Your Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            while ($row = $result->fetch_assoc()) {
                $product_name = $row['name'];
                $product_price = $row['price'];
                $quantity = $row['quantity'];
                $subtotal = $product_price * $quantity;
                $total += $subtotal;
            ?>
                <tr>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $product_price; ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $subtotal; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo $total; ?></p>
    <!-- Add a button to proceed to checkout or continue shopping -->
</body>

</html>
