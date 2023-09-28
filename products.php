<?php
session_start();

// Check if the user is logged in and is an admin
if (!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true)) {
    header("Location: index.php"); // Redirect to index.php for normal users
    exit();
}
?>
<?php
require_once('templates/header.php')
?>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
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

        td,th {
            text-align: center;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #bcabdb;
        }

        tr:nth-child(odd) {
            background-color: #E4E9FD ;
        }
        </style>
   <?php
    require_once('templates/header2.php');
    ?>
    <?php
    require_once('templates/conn.php');

    
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>product id</th><th>Category</th><th>Name</th><th>Price</th><th>Actions</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["product_id"] . "</td>";
            echo "<td>" . $row["category_id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td><a href='editProduct.php?product_id=" . $row['product_id'] . "'>Edit</a>| <a href='delete.php?product_id=" . $row['product_id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No products found.";
    }
    $conn->close();
    require_once('templates/footer.php')
    ?>

