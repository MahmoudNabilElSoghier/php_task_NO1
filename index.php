<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Task</title>

    <!-- |--- START CSS ---| -->

    <!-- START FRAMEWORKS CSS -->
    <link rel="stylesheet" href="./css/components/fontawesome/all.min.css">
    <link rel="stylesheet" href="./css/components/bootstrap/bootstrap.min.css">
    <!-- END FRAMEWORKS CSS  -->

    <!-- START MAIN CSS -->
    <link rel="stylesheet" href="./css/app.css">
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
                    <a class="navbar-brand" href="./index.php">
                        <img src="./images/php-logo-php-icon-logo-brands-for-4.png" hieght="48" width="96" alt="php logo">
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
                            <a class="nav-link active fw-bold" aria-current="page" href="./index.php"> <i class="fa-solid fa-house"></i> Home</a>
                            </li>
                            <!-- END PAGE -->

                            <!-- START PAGE -->
                            <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="./pages/headerPages/allProducts.php"> <i class="fa-brands fa-shopify"></i> All Products</a>
                            </li>
                            <!-- END PAGE -->

                            <!-- START PAGE -->
                            <li class="nav-item">
                            <a class="nav-link fw-bold" href="./pages/headerPages/login.php"><i class="fa-solid fa-right-to-bracket"></i> Account</a>
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

        <!-- START CONTANT CONTAINER -->
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1> <i class="fa-solid fa-house"></i> Welcome to our store.</h1>
                </div>
            </div>
        </div>
        <!-- END CONTANT CONTAINER -->
        
        <!-- START FOOTER -->
        <footer>
            
        </footer>
        <!-- END FOOTER -->
    </main>
    <!-- END MAIN -->




    <!-- |--- START SCRIPT ---| -->

    <!-- START FRAMEWORKS SCRIPT -->
    <script src="./js/components/fontawesome/all.min.js"></script>
    <script src="./js/components/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- END FRAMEWORKS SCRIPT -->

    <!-- START MAIN SCRIPT -->
    <script type="module" src="./js/app.js"></script>
    <!-- END MAIN SCRIPT -->

    <!-- |--- END SCRIPT ---| -->
</body>
</html>