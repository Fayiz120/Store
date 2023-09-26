<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- googlefont link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&family=Rubik&family=Ubuntu&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
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

        // Close the prepared statement
        $stmt->close();
    }

    $conn->close();
    ?>