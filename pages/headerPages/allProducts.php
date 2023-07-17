<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Task</title>

    <!-- |--- START CSS ---| -->

    <!-- START FRAMEWORKS CSS -->
    <link rel="stylesheet" href="../../css/components/fontawesome/all.min.css">
    <link rel="stylesheet" href="../../css/components/bootstrap/bootstrap.min.css">
    <!-- END FRAMEWORKS CSS  -->

    <!-- START MAIN CSS -->
    <link rel="stylesheet" href="../../css/app.css">
    <!-- END MAIN CSS  -->

    <!-- |--- END CSS ---| -->
</head>
<body>
    <!-- START MAIN -->
    <main>
        <!-- START HEADER -->
        <header class="border-2 border-bottom">
            <!-- START MAIN NAVBAR -->
            <nav class="navbar navbar-expand-lg bg-white">
                <!-- START CONTAINER NAVBAR -->
                <div class="container-fluid">

                    <!-- START BRAND NAVBAR -->
                    <a class="navbar-brand" href="../../index.php">
                        <img src="../../images/php-logo-php-icon-logo-brands-for-4.png" hieght="48" width="96" alt="php logo">
                    </a>
                    <!-- END BRAND NAVBAR -->

                    <!-- START HUMBURGER NAVBAR -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- END HUMBURGER NAVBAR -->

                    <!-- START PAGES CONTAINER NAVBAR -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- START PAGES NAVBAR -->
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <!-- START PAGE -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold" aria-current="page" href="../../index.php"> <i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <!-- END PAGE -->

                            <!-- START PAGE -->
                            <li class="nav-item">
                                <a class="nav-link active fw-bold" aria-current="page" href="./allProducts.php"> <i class="fa-brands fa-shopify"></i> All Products</a>
                            </li>
                            <!-- END PAGE -->

                            <!-- START PAGE -->
                            <li class="nav-item">
                                <a class="nav-link fw-bold" href="./login.php"> <i class="fa-solid fa-right-to-bracket"></i> Account</a>
                            </li>
                            <!-- END PAGE -->

                            <!-- START PAGE
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            END PAGE -->

                            <!-- START PAGE
                            <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                            </li>
                            START PAGE -->
                        </ul>
                        <!-- START PAGES NAVBAR -->

                        <!-- START SEARCH NAVBAR
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        END SEARCH NAVBAR -->

                    </div>
                    <!-- END PAGES CONTAINER NAVBAR -->
                </div>
                <!-- END CONTAINER NAVBAR -->
            </nav>
            <!-- START MAIN NAVBAR -->
        </header>
        <!-- END HEADER -->
        
        <?php
            //display email customer
            if(!empty($_SESSION["displayEmail"])){
                session_start();
                var_dump($_SESSION["displayEmail"]);
            }
        ?>
    <!-- START CARDS SECTION -->
    <div class="container mt-5 mb-5">
        <!-- START GRID CARDS SECTION -->
        <div class="col-12 d-flex justify-content-between">
            <?php
                //create associative array for display products
                $products = [
                    "RAYMOND" => [
                        "price" => "100$",
                        "img" => "../../images/product1.webp"
                    ],
                    "ROAMER" => [
                        "title" => "",
                        "price" => "150$",
                        "img" => "../../images/product2.webp"
                    ],
                    "NIXON" => [
                        "price" => "90$",
                        "img" => "../../images/product3.webp"
                    ],
                    "MARLOE" => [
                        "price" => "80$",
                        "img" => "../../images/product4.webp"
                    ],
                    "ROTARY" => [
                        "price" => "110$",
                        "img" => "../../images/product5.webp"
                    ],
                    "WILLIAM" => [
                        "price" => "100$",
                        "img" => "../../images/product6.webp"
                    ],
                ];
                $dataContainer = "";
                //display values from foreach loop
                foreach ($products as $product => $values) {
                    echo "<div class='card' style='width: 18rem;'>
                    <img src='{$values['img']}' class='card-img-top' width='150' height='200' alt='Watches'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$product}</h5>
                        <p class='card-text'>Price: {$values['price']}</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>";
                }
            ?>
        </div>
        <!-- END GRID CARDS SECTION -->
      </div>
    </div>
    <!-- END CARDS SECTION -->

        
        <!-- START FOOTER -->
        <footer>
            
        </footer>
        <!-- END FOOTER -->
    </main>
    <!-- END MAIN -->




    <!-- |--- START SCRIPT ---| -->

    <!-- START FRAMEWORKS SCRIPT -->
    <script src="../../js/components/fontawesome/all.min.js"></script>
    <script src="../../js/components/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- END FRAMEWORKS SCRIPT -->

    <!-- START MAIN SCRIPT -->
    <script type="module" src="../../js/app.js"></script>
    <!-- END MAIN SCRIPT -->

    <!-- |--- END SCRIPT ---| -->
</body>
</html>