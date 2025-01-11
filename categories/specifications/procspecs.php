<?php
    session_start();
    include_once '../../conn.php';
    //if (!isset($_SESSION["processor"])) {
        //header("Location: processor.php");
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4Tech - Processor Specs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark border-body fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../home.php">
                <img src="../../images/logo-horizontal.png" class="img-fluid" width="140" alt="M4Tech Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link link-light" href="../../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="../../about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="../../contact.php">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-light" href="#" href="#" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu bg-light text-dark" style="width: 25rem;">
                            <div class="row row-cols-2 g-0">
                                <?php
                                    $sql = "SELECT * FROM categories;";
                                    $categories = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($categories)) {
                                ?>
                                <div class="col">
                                    <li><a class="dropdown-item" href="../../categories/<?php echo $row['categ_link'] ?>.php"><?php echo $row['categ_name'] ?></a></li>
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

    <main class="mt-5 pt-5">
        <div class="container">
            <!--Breadcrumbs-->
            <div aria-label="breadcrumb" id="top">
                <ol class="breadcrumb breadcrumb-chevron rounded-3">
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis" href="../../home.php">
                            <i class="fa-solid fa-house"></i>
                            <span class="visually-hidden">Home</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="link-body-emphasis fw-semibold text-decoration-none" href="../../categories/processor.php">Processor</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php
                        // $processor = $_SESSION['processor'];
                        // $query = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
                        // $row = mysqli_fetch_assoc($query);                        
                        ?>
                    </li>
                </ol>
            </div>

            <div class="row d-flex justify-content-between g-4 mb-5">
                <!-- Gallery Display -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card p-2 mb-2">
                        <div class="card-body d-flex justify-content-center">
                            <img class="img-fluid" src="../../images/processor/R3-3200G(1).png" width="200" alt="">
                        </div>
                    </div>
                    <!-- <div class="row d-flex justify-content-between align-items-center g-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
                                    <img class="img-fluid" src="../../images/processor/R3-3200G(1).png" width="75">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
                                    <img class="img-fluid" src="../../images/processor/R3-3200G(1).png" width="75">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
                                    <img class="img-fluid" src="../../images/processor/R3-3200G(1).png" width="75">
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <h3 class="mb-2">AMD Ryzen 3 3200G Processor</h3>
                    <div class="fs-1 mb-3 text-secondary">₱1000.00</div>
                    <div class="d-flex flex-column">
                        <div>Availability: <span class="text-success">In Stock</span></div>
                        <div>Warranty: <span>2 years</span></div>
                        <div>Delivery Options: <span>Standard Delivery</span></div>
                        <div>Payment Options: Cash, GCash</div>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="">
                <h5>Product Description</h5>
                <p></p>
            </div>

            <!-- Specification -->
             <div class="">
                <h5>Specifications</h5>
                <div class="table-responsive text-start">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Brand</th>
                                <td>AMD</td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td>Ryzen 3 3200G</td>
                            </tr>
                            <tr>
                                <th>Form Factor</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Architecture</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Socket Type</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Clockspeed</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Base Clock</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Cores</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Threads</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Multithreading (SMT)</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>PCI</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Supported Memory Type</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Cache</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Thermal Design Power (TDP)</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Overclocking Compatibility</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Max.Operating Temperature</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>*OS Support</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
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
                        <li class="nav-item mb-2"><a href="../../home.php" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="../../about.php" class="nav-link p-0 text-white">About</a></li>
                        <li class="nav- mb-2"><a href="../../contact.php" class="nav-link p-0 text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-0 col-lg-5">
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

    <?php include '../../process.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05d9027216.js" crossorigin="anonymous"></script>

</body>
</html>