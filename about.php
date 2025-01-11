<?php
    session_start();
    include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4Tech - About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark border-body fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="images/logo-horizontal.png" class="img-fluid" width="140" alt="M4Tech Logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link link-light" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="contact.php">Contact</a>
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
                                    <li><a class="dropdown-item" href="categories/<?php echo $row['categ_link'] ?>.php"><?php echo $row['categ_name'] ?></a></li>
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
        <div class="mt-5">
            <div class="bg-image mb-5" style="background-image: url(images/bg.png); background-position: center; background-size: cover; width: 100%; height: 400px; position: relative;">
                <div class="mask" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;">
                    <div class="container d-flex flex-column justify-content-center align-items-center text-center h-100">
                        <h1 style="color: #003060;">About Us</h1>
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 col-md-11">
                                <p class="fs-5 fs-sm-6 m-0">Welcome to M4Tech, your trusted source for high-quality computer parts and accessories. We are passionate about providing the best products to tech enthusiasts, gamers, professionals, and everyday users. Whether you're building a custom PC, upgrading your current system, or looking for reliable peripherals, we’ve got you covered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 d-flex align-items-center">
                    <div class="col d-flex justify-content-center mb-5">
                        <img class="img-fluid shadow" src="images/about-us-1.png" style="border-radius: 8px;" width="450" alt="">
                    </div>
                    <div class="col my-5">
                        <h3 style="color: #003060;">Our Mission</h3>
                        <p class="m-0">At M4Tech, we aim to provide the best products with excellent customer service. Our website showcases our products, but for purchasing, we encourage customers to visit our physical store or contact us directly. We are committed to delivering quality products at competitive prices, with fast and secure shipping.</p>
                    </div>
                    <div class="col my-5">
                        <h3 class="mb-4" style="color: #003060;">Why Choose Us?</h3>
                        <div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Wide Selection:</b> We offer a broad selection of computer parts and accessories from well-known brands, including motherboards, processors, keyboards, mice, and more.</div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Expert Advice:</b> Our team is ready to assist you in selecting the right products for your needs, whether you're building or upgrading a computer.</div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Customer Satisfaction:</b> We prioritize customer satisfaction and aim to build lasting relationships by providing reliable products and personalized service.</div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Quality Assurance:</b> We only source products from trusted manufacturers, ensuring the quality and performance you expect.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center my-5">
                        <img class="img-fluid shadow" src="images/about-us-2.png" style="border-radius: 8px;" width="450" alt="">
                    </div>
                    <div class="col d-flex justify-content-center my-5">
                        <img class="img-fluid shadow" src="images/about-us-3.png" style="border-radius: 8px;" width="450" alt="">
                    </div>
                    <div class="col my-5">
                        <h3 class="mb-4" style="color: #003060;">Our Values</h3>
                        <div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Integrity:</b> We value transparency and honesty, offering fair prices and products you can trust.</div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Innovation:</b> We keep up with the latest trends in technology to ensure you have access to the best and most up-to-date products.</div>
                            </div>
                            <div class="d-flex">
                                <i class="fa-solid fa-check me-2 mt-1" style="color:#003060;"></i>
                                <div><b>Community:</b> We are committed to fostering strong relationships with our customers and being a dependable resource in the tech community.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-5">
                    <i>Thank you for visiting M4Tech. We look forward to serving you at our physical store and helping you find the perfect tech solutions!</i>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-0 col-md-4 col-lg-4 mb-3">
                    <h5 class="mb-2">Contact Information</h4>
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
                    <h5 class="mb-2">Quick Links</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="home.php" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-white">About</a></li>
                        <li class="nav- mb-2"><a href="contact.php" class="nav-link p-0 text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-0 col-lg-5">
                    <form>
                        <h5 class="mb-2">Subscribe to our newsletter</h4>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05d9027216.js" crossorigin="anonymous"></script>
</body>
</html>