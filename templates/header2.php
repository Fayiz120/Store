<?php
if (session_id() === '') {
    session_start();
}


?>
<title>Online Store</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg header ">
        <div class="container-fluid ">
            <!-- This Nav bar brand -->
            <div class="container brand-logo">
                <a class="navbar-brand" href="#">
                    <img src="https://seeklogo.com/images/A/adidas-logo-107B082DA0-seeklogo.com.png" alt="Bootstrap"
                        class="logo">
                </a>
            </div>

            <!-- navbar list button for smaller devices -->
            <div class="sections nav-button">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- navbar list items  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="new.php">New arrival</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="man.php">Men</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="women.php">Women</a>
                        </li>
                        <?php
                        if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true) {
                            // User is an admin, show the "Add Product" link
                            echo '<li class="nav-item"><a class="nav-link" href="addProduct.php">Add Product</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="Products.php">Products</a></li>';
                        }
                        ?>



                    </ul>
                </div>

            </div>
            <div class="signup-section">

                <?php

                // Check if the user is logged in
                if (isset($_SESSION['name'])) {
                    $username = $_SESSION['name'];
                    echo "<p>Welcome, $username!</p> <a href='logout.php'>Logout</a>";
                } else {
                    echo "<p>Hi Guest</p><a href='login.php' class='sign-item'> <i class='fa-solid fa-right-to-bracket fa-2xl '
    style='color: #000000;'></i></a>";
                }
                ?>

                <a href="cart.php" class="sign-item"> <i class="fa-solid fa-cart-shopping fa-2xl"
                        style="color: #000000;"></i></a>
            </div>

        </div>
    </nav>