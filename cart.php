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
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
            max-width: 600px;
            margin: 50px auto;
            background: white;
            border-radius: 5px;
            box-shadow: 5px 5px 45px -5px rgba(0, 0, 0, 0.3);
        }

        td,
        th {
            text-align: center;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #bcabdb;
        }

        tr:nth-child(odd) {
            background-color: #E4E9FD;
        }
        
    </style>
    <?php
    require_once('templates/header2.php');



    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    require_once('templates/conn.php');

    $user_id = $_SESSION['user_id'];
    

    $sql = "SELECT c.quantity, c.product_id, p.name, p.price, p.url FROM cart c
    INNER JOIN products p ON c.product_id = p.product_id
    WHERE c.user_id = $user_id";
    


    $result = $conn->query($sql);
    if (!$result) {
        die("SQL query failed: " . $conn->error);
    }
    ?>
    <h1>Your Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Image </th>
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
                $product_image = $row['url'];
                $quantity = $row['quantity'];
                $subtotal = $product_price * $quantity;
                $total += $subtotal;
                ?>
                <tr>
                    <td>
                        <?php echo $product_name; ?>
                    </td>
                    <td>
                        <?php echo $product_price; ?>
                    </td>
                    <td>
                        <img src="<?php echo $product_image ?>" alt="" height="100px" width="100px">
                    </td>
                    <td>
                        <?php echo $quantity; ?>
                        <a href="addToCart.php?product_id=<?php echo $row['product_id']; ?>&source=cart" class="btn card-btn"><i class="fa-solid fa-plus"></i></a>
                        <a href="addToCart.php?product_id=<?php echo $row['product_id']; ?>&action=remove&source=cart" class="btn card-btn"><i class="fa-solid fa-minus"></i></a>
                    </td>
                    <td>
                        <?php echo $subtotal; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total:
        <?php echo $total; ?>
    </p>

    <?php
    require_once('templates/footer.php');
    ?>