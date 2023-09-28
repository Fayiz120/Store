<?php
require_once('templates/header.php')
?>
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/new.css">


    <?php
    require_once('templates/header2.php');
    ?>




    <div class="container">

        <div class="row d-flex justify-content-center">
            <h2 class="sub-heading">New arrivals</h2>

            <div class="card col-10 col-md-5 col-lg-3">
                <img id="first-img"
                    src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0f8ccddbc11845d5bf81afc700fc6d35_9366/Adilette_22_Slides_Grey_HP6522_HM1.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men originals Grey adilette</p>
                <h5 class="product-description">₹5999.0</h5>

            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img id="second-img"
                    src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/99ac2fdea36e4714bdbaaf4200bcc5ff_9366/Adilette_22_Slides_Brown_HQ4670_01_standard.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men originals Brown adilette</p>
                <h5 class="product-description">₹5999.0</h5>

            </div>

            <div class="card col-10 col-md-5 col-lg-3">
                <img id="third-img"
                    src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c3bd9dda9fdd4a7cbc9aad1e00dd0045_9366/NMD_R1_Shoes_White_GZ9260_01_standard.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men originas white NMD_R1 Shoes</p>
                <h5 class="product-description">₹14999.0</h5>

            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img id="fourth-img"
                    src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7c3bd0f9e2e5463780d367c6c0be6560_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_01_standard.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men originals Brown Smith Crepe Shoes</p>
                <h5 class="product-description">₹13999.0</h5>

            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img id="fifth-img"
                    src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/854d6d1edbf94db1aa91d7ee5fee9216_9366/busenitz-vulc-2.0-shoes.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men originals Black busenitz-vulc-2.0-shoes</p>
                <h5 class="product-description">₹7999.0</h5>

            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img id="sixth-img"
                    src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bbbd04eb0bac440da48655a4117cb298_9366/OZELIA_Shoes_Grey_IE2002_01_standard.jpg"
                    class="card-img" alt="...">
                <p class="product-description">Men lifestyle Grey OZELIA_Shoes</p>
                <h5 class="product-description">₹10999.0</h5>

            </div>

            <?php


            require_once('templates/conn.php');
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result === false) {
                echo "Error executing query: " . $conn->error;
                exit();
            }


            while ($row = $result->fetch_assoc()) {
                echo '<div class="card  col-10 col-md-5 col-lg-3">';
                echo '<img src="' . $row['url'] . '" class="card-img" alt="' . $row['name'] . '">';
                echo '<p class="product-description">' . $row['name'] . '</p>';
                echo '<h5 class="product-description">₹' . $row['price'] . '</h5>';

                ?> <a href="addToCart.php?product_id=<?php echo $row['product_id']; ?>&source=new" class="btn ">Add to
                    Cart</a>
                <?php
                echo '</div>';
            }


            $conn->close();
            ?>



        </div>
    </div>


    <script src="script.js"></script>


    <?php

    require_once('templates/conn.php');
    require_once('templates/footer.php');


    ?>
    