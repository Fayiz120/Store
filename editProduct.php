<?php
require_once('templates/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["product_id"])) {
    $product_id = $_GET["product_id"];

    
    $sql = "SELECT * FROM products WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $row = $result->fetch_assoc();
        
        ?>
  <?php
require_once('templates/header.php')
?>

            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/login.css">
            <?php
    require_once('templates/header2.php');
    ?>
            <h2>Edit Product</h2>
            <div class="form-div">
                <div class="login-container">
                    <form action="updateProduct.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="text" name="category_id" value="<?php echo $row['category_id']; ?>"
                            placeholder="Category ID" required>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Product Name" required>
                        <input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Price" required>
                        <input type="text" name="url" value="<?php echo $row['url']; ?>" placeholder="Image URL" required>
                        <button type="submit">Update Product</button>
                    </form>
                </div>
            </div>

            <?php
require_once('templates/footer.php');
?>
        <?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Invalid request.";
}
?>