<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require_once('templates/conn.php');


if (isset($_GET['product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['product_id'];


    $sql = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
    $result = $conn->query($sql);
    $action= 'add';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    }
        if ($action === 'remove') {
            
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $quantity = $row['quantity'] - 1;

            if ($quantity > 0) {
          
                $updateSql = "UPDATE cart SET quantity = $quantity WHERE id = " . $row['id'];
                $conn->query($updateSql);
            } else {
                $deleteSql = "DELETE FROM cart WHERE id = " . $row['id'];
                $conn->query($deleteSql);
            }
      
        }
    }
        if ($action != 'remove') {
            
            
        

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $quantity = $row['quantity'] + 1;
        $updateSql = "UPDATE cart SET quantity = $quantity WHERE id = " . $row['id'];
        $conn->query($updateSql);
    } else {

        $insertSql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
        $conn->query($insertSql);
    }
}
}



if (isset($_GET['source'])) {
    $source = $_GET['source'];
    if ($source == 'new') {

        header("Location: new.php");
    } elseif ($source === 'cart') {
        header("Location: cart.php");
    } else {
        header("Location: cart.php");
    }
} else {
    header("Location: cart.php");
}

exit();
?>