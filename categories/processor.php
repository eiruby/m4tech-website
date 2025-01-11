<?php
    session_start();
    include_once "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4Tech - Processor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark border-body fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php">
                <img src="../images/logo-horizontal.png" class="img-fluid" width="140" alt="M4Tech Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link link-light" aria-current="page" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="../contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-light" href="#" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu bg-light text-dark" style="width: 25rem;">
                            <div class="row row-cols-2 g-0">
                                <?php
                                    $sql = "SELECT * FROM categories;";
                                    $categories = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($categories)) {
                                ?>
                                <div class="col">
                                    <li><a class="dropdown-item" href="<?php echo $row['categ_link'] ?>.php"><?php echo $row['categ_name'] ?></a></li>
                                </div>
                                <?php } ?>
                            </div>
                        </ul>
                    </li>                    
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit">
                        <i class="fa-solid fa-magnifying-glass fa-xl" style="color: white"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    
    <main>
        <div class="px-4 pt-5 mt-5">
            <div class="d-flex">
                <div class="border-end pe-4 me-4" style="height: 100vh;">
                    <form action="" method="post">
                        <a class="text-dark text-decoration-none" href="#"><h5>Filter</h5></a>
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion mb-4" id="accordionPanelsStayOpenExample">
                                    <!-- Price -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                                Price
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body p-3">
                                                <div class="input-group">
                                                    <input type="number" class="form-control" name="min_price" placeholder="Min" min="100" max="20000" aria-label="Min">
                                                    <span class="input-group-text">-</span>
                                                    <input type="number" class="form-control" name="max_price" placeholder="Max" min="100" max="30000" aria-label="Max">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Brands -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                Brands
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                            <div class="accordion-body p-3">
                                                <ul class="list-unstyled mb-0">
                                                    <div class="d-flex">
                                                        <input type="checkbox" name="brands[]" value="AMD" class="me-2" id="amdBrand">
                                                        <label for="amdBrand">AMD</label>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-success w-100" name="filter" type="submit">Filter</button>
                        </div>
                    </form>
                </div>

                <div class="container">
                    <!-- Breadcrumb -->
                    <div aria-label="breadcrumb" id="top">
                        <ol class="breadcrumb breadcrumb-chevron rounded-3">
                            <li class="breadcrumb-item">
                                <a class="link-body-emphasis" href="../home.php">
                                    <i class="fa-solid fa-house"></i>
                                    <span class="visually-hidden">Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Processor</li>
                        </ol>
                    </div>
                    <!-- Sorter -->
                    <div class="d-flex justify-content-between mb-4">
                        <h3 class="my-auto me-3 me-lg-0">Processor</h3>
                        <div class="d-flex my-auto">
                            <div >
                                <a class="dropdown-toggle text-decoration-none" style="color: black;" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" fdprocessedid="1ohc2s">
                                    Sort by
                                </a>
                                <form action="" method="post">
                                    <ul class="dropdown-menu">
                                        <li><button class="dropdown-item" type="button" name="sort" value="ASC" type="submit">Price: Low to High</button></li>
                                        <li><button class="dropdown-item" type="button" name="sort" value="DESC" type="submit">Price: High to Low</button></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Product List -->
                    <div class="row d-flex justify-cotent-start mb-5 g-2">
                        <?php
                            if (isset($_POST['filter'])) {
                                $min_price = $_POST['min_price'] ?? 0;
                                $max_price = $_POST['max_price'] ?? PHP_INT_MAX;
                                $brands = $_POST['brands'] ?? [];
                            
                                $brand_filter = "";
                                if (!empty($brands)) {
                                    $brand_list = implode("','", array_map('mysqli_real_escape_string', $brands));
                                    $brand_filter = "AND brand IN ('$brand_list')";
                                }
                            
                                $sql = "SELECT * FROM processor WHERE proc_price BETWEEN $min_price AND $max_price $brand_filter ORDER BY proc_price ASC";
                            } else if (isset($_POST['sort'])) {
                                $sort = $_POST['sort'];
                                $sql = "SELECT * FROM processor ORDER BY proc_price $sort";
                            } else {
                                $sql = "SELECT * FROM processor ORDER BY proc_price ASC";
                            }
                            
                            $result = mysqli_query($conn, $sql);
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <div class="col-6 col-md-4 col-lg-3">
                            <a class="text-decoration-none" href="../categories/specifications/procspecs.php">
                                <div class="card h-100 shadow-sm">
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <img class="img-fluid p-3" width="180" src="../images/processor/<?php echo $row['proc_img']; ?>.png" alt="image">
                                    </div>
                                    <div class="px-3 pb-3">
                                        <p class="m-0">
                                            <span class="fs-6 fs-lg-5"><b><?php echo $row['proc_name']; ?></b></span><br>
                                            Php <?php echo $row['proc_price']; ?>.00
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php } ?>
                    </div>

                    <!-- <div class="mt-4">
                        <ul class="pagination d-flex justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                              </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                              </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>

        </div>
    </main>

    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-4 col-lg-4 mb-3">
                    <h5 class="mb-2">Contact Information</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">Nibaliw Sur, Bautista, Pangasinan</li>
                        <li class="nav-item mb-2">m4techsales@gmail.com</li>
                        <li class="nav-item mb-2">09605305265</li>
                        <div class="d-flex">
                            <a class="me-3" href="https://www.facebook.com/profile.php?id=61556641396317" target="_blank">
                                <i class="fa-brands fa-facebook" style="font-size: 1.5rem; color: #ffffff;"></i>
                            </a>
                            <a class="me-3" href="mailto:m4techsales@gmail.com" target="_blank">
                                <i class="fa-solid fa-envelope" style="font-size: 1.5rem; color: #ffffff;"></i>
                            </a>
                            <a href="https://shopee.ph/m4techcomputer" target="_blank">
                                <i class="fa-solid fa-bag-shopping" style="font-size: 1.5rem; color: #ffffff;"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="col-6 col-md-3 col-lg-3 mb-3">
                    <h5 class="mb-2">Quick Links</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="home.php" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-white">About</a></li>
                        <li class="nav- mb-2"><a href="contact.php" class="nav-link p-0 text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="col-0 col-md-5 col-lg-5">
                    <form>
                        <h5 class="mb-2">Subscribe to our newsletter</h5>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address" fdprocessedid="qy6pfi">
                            <button class="btn btn-primary" type="button" fdprocessedid="yoetdj">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <?php //include '../process.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05d9027216.js" crossorigin="anonymous"></script>
</body>
</html>