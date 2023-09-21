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
    <link rel="stylesheet" href="new.css">


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
                            <a class="nav-link " href="index.html">Home</a>
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
                            <a class="nav-link " href="products.php">Products</a>
                        </li>


                    </ul>
                </div>

            </div>
            <div class="signup-section">

                <a href="login.html" class="sign-item"> <i class="fa-solid fa-right-to-bracket fa-2xl "
                        style="color: #000000;"></i></a>
                <a href="" class="sign-item"> <i class="fa-solid fa-magnifying-glass fa-2xl"
                        style="color: #000000;"></i></a>
            </div>

        </div>
    </nav>





<div class="container">

    <div class="row d-flex justify-content-center">
        <h2 class="sub-heading">New arrivals</h2>

        <div class="card col-10 col-md-5 col-lg-3">
            <img id="first-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0f8ccddbc11845d5bf81afc700fc6d35_9366/Adilette_22_Slides_Grey_HP6522_HM1.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men originals Grey adilette</p>
                <h5 class="product-description">₹5999.0</h5>
            
        </div>
        <div class="card col-10 col-md-5 col-lg-3">
            <img id="second-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/99ac2fdea36e4714bdbaaf4200bcc5ff_9366/Adilette_22_Slides_Brown_HQ4670_01_standard.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men originals Brown adilette</p>
                <h5 class="product-description">₹5999.0</h5>
            
        </div>

        <div class="card col-10 col-md-5 col-lg-3">
            <img id="third-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c3bd9dda9fdd4a7cbc9aad1e00dd0045_9366/NMD_R1_Shoes_White_GZ9260_01_standard.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men originas white NMD_R1 Shoes</p>
                <h5 class="product-description">₹14999.0</h5>
            
        </div>
        <div class="card col-10 col-md-5 col-lg-3">
            <img id="fourth-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7c3bd0f9e2e5463780d367c6c0be6560_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_01_standard.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men originals Brown Smith Crepe Shoes</p>
                <h5 class="product-description">₹13999.0</h5>
            
        </div>
        <div class="card col-10 col-md-5 col-lg-3">
            <img id="fifth-img" src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/854d6d1edbf94db1aa91d7ee5fee9216_9366/busenitz-vulc-2.0-shoes.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men originals Black busenitz-vulc-2.0-shoes</p>
                <h5 class="product-description">₹7999.0</h5>
            
        </div>
        <div class="card col-10 col-md-5 col-lg-3">
            <img id="sixth-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bbbd04eb0bac440da48655a4117cb298_9366/OZELIA_Shoes_Grey_IE2002_01_standard.jpg"
                class="card-img" alt="...">
                <p class="product-description">Men lifestyle Grey OZELIA_Shoes</p>
                <h5 class="product-description">₹10999.0</h5>
            
        </div>
<!-- php -->
        <p> php code start here </p>

        <?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "shop";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch product data from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Check for query execution errors
if ($result === false) {
    echo "Error executing query: " . $conn->error;
    exit();
}

// Loop through the results and generate product cards
while ($row = $result->fetch_assoc()) {
     echo '<div class="card  col-10 col-md-5 col-lg-3">';
    echo '<img src="' . $row['url'] . '" class="card-img" alt="' . $row['name'] . '">';
    echo '<p class="product-description">' . $row['name'] . '</p>';
    echo '<h5 class="product-description">₹' . $row['price'] . '</h5>';
   echo  '<a href="addToCart.php?product_id='.$row['product_id'].'" class="btn card-btn">Add to Cart</a>';
//   echo '<a href="addToCart.php?data=' . base64_encode(json_encode(array('product_id' => $row['product_id'], 'product_name' => $row['name'], 'product_price' => $row['price']))) . '" class="btn card-btn">Add to Cart</a>';

    echo '</div>';
}

// Close the database connection
$conn->close();
?>


<p>php code end here</p>
    </div>
</div>



    
    <footer class="text-center text-lg-start text-white ">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            address
                        </h6>
                        <p>
                            Adidas INDIA Marketing Pvt Ltd (Corporate Office) in Gurgaon Sector 32, Gurgaon, Delhi.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
                        <p>
                            <a class="text-white">Home</a>
                        </p>
                        <p>
                            <a class="text-white">New arrival</a>
                        </p>
                        <p>
                            <a class="text-white">Men</a>
                        </p>
                        <p>
                            <a class="text-white">Women</a>
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> Pattambi</p>
                        <p><i class="fas fa-envelope mr-3"></i> mfaisep@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +91 8606026387</p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #5571ad" href="#!"
                            role="button"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                            role="button"><i class="fab fa-google"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                            role="button"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                            role="button"><i class="fab fa-linkedin-in"></i></a>

                        <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                            role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </footer>


    <script src="https://kit.fontawesome.com/e968125f45.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>