<?php
session_start();

if (!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true)) {
    header("Location: index.php"); 
    exit();
}
require_once('templates/header.php')
?>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <?php
    require_once('templates/header2.php');
    ?>

    <div class="form-div">
        <div class="login-container">


            <form method="POST" enctype="multipart/form-data">
                <input type="text" id="category_id" placeholder="Category ID" name="category_id" required><br>

                <input type="text" id="name" placeholder="Name" name="name" required><br>

                <input type="text" id="price" placeholder="Product price" name="price" required><br>

                <input type="text" id="url" placeholder="Product URL" name="url" required><br>

                <input type="submit" value="Add Product">
            </form>
        </div>
    </div>

    <?php

    require_once('templates/footer.php');
    require_once('templates/conn.php');


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category_id = $_POST["category_id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $url = $_POST["url"];


        $sql = "INSERT INTO products (category_id, name, price, url) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $category_id, $name, $price, $url);

        if ($stmt->execute()) {
            header("location:products.php");
        } else {
            echo "Error adding product: " . $stmt->error;
        }
        $stmt->close();
    }

    $conn->close();
    ?>