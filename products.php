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
                            <a class="nav-link " href="men.html">Men</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="addProduct.html">Add Product</a>
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

    // Close the database connection
    $conn->close();
    ?>

    <!-- Add your HTML structure and styles for the page here -->


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
</body>

</html>
