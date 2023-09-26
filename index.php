<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- googlefont link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&family=Rubik&family=Ubuntu&display=swap"
        rel="stylesheet">

    <!-- css link -->
    <link rel="stylesheet" href="style.css">

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
                            <a class="nav-link " href="man.html">Men</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="women.html">Women</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="addProduct.html">Add product</a>
                        </li>



                    </ul>
                </div>

            </div>
            <div class="signup-section">

                <?php
                session_start();
            
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

    <div class="row">
        <!-- <video src="FIFA World Cup™ 2022 _ Family Reunion _ adidas.mp4" autoplay loop class="col-12"></video> -->
        <!-- <img src="https://images.unsplash.com/photo-1519931127525-6b6a7619a003?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGFkaWRhcyUyMHNob2VzfGVufDB8MHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
            alt="" srcset="" class="cover-img"> -->
    </div>

    <div class="container  ">
        
        <hr style="height:5px;border-width:0;color:gray;background-color:gray">
        <div class="row d-flex justify-content-center">


            <h1 class="sub-heading">Sneakers</h1>

            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/f112bd38aab24636aa55aae700d35989_9366/superstar-shoes.jpg"
                    class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">New arrival</h5>
                </div>
            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/c3bd9dda9fdd4a7cbc9aad1e00dd0045_9366/NMD_R1_Shoes_White_GZ9260_01_standard.jpg"
                    class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Men</h5>
                </div>
            </div>

            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/7e380c55663142f583243f9722ec39bd_9366/Forum_XLG_Shoes_Pink_IE7351_01_standard.jpg"
                    class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Women</h5>
                </div>
            </div>

        </div>

    </div>





    <div class="container  ">
        
        <hr style="height:5px;border-width:0;color:gray;background-color:gray">
        <div class="row d-flex justify-content-center">


            <h1 class="sub-heading">Clothings</h1>

            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/532fc6fbbe6242b389bdaebb0157e70e_9366/BRANDLOVE_TEE_Grey_HT3395_21_model.jpg"
                    class="card-img" alt="...">
                
            </div>
            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/cfde9ddffe5a4a5e91c02c9751a9a9ce_9366/ADIDAS_X_FARM_RIO_GRAPHIC_TEE_Purple_HZ2806_21_model.jpg"
                    class="card-img" alt="...">
                
            </div>

            <div class="card col-10 col-md-5 col-lg-3">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9ca8481e5c604111bddcafc800253fc9_9366/Graphics_Cloudy_Trefoil_Hoodie_Black_II8168_21_model.jpg"
                    class="card-img" alt="...">
                
            </div>

        </div>

    </div>
<?php
require_once('templates/footer.php');
?>