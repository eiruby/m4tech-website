<?php
    session_start();
    include_once 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4Tech - Home</title>
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
                        <a class="nav-link dropdown-toggle link-light" href="#" href="#" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">Products</a>
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
        <!-- Hero Section -->
        <div class="mb-5">
            <div class="" style="background-image: url(images/hero-section.png); background-position: center; width: 100%;">
                <div class="container col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="images/hero-img.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="600" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
                            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" fdprocessedid="o5hoei">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-lg px-4" fdprocessedid="9ra5ud">Default</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Value Proposition Bar -->
        <!-- <div class="text-center">
            <div class="row">
                <div class="col bg-bar1 py-4">High Quality Products</div>
                <div class="col bg-bar2 py-4">Afforable Prices</div>
                <div class="col bg-bar3 py-4">24/7 Customer Support</div>
            </div>
        </div> -->

        <!-- Categories -->
        <div class="container my-5 pb-5">   
            <h4 class="mb-4">Categories</h4>
            <div class="row row-cols-8 text-center g-2">
                <?php
                    $sql = "SELECT * FROM categories;";
                    $categories = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($categories)) {
                        $_SESSION['categ_name'] = $row['categ_link'];
                ?>
                <div class="col">
                    <a class="text-decoration-none" href="categories/<?php echo $row['categ_link'] ?>.php">
                        <div class="card h-100 shadow-sm" style="width: 7rem; margin: 0 auto;">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <img class="img-fluid p-2" width="100" src="images/categories/<?php echo $row['categ_link']; ?>.png" alt="image">
                            </div>
                            <div class="pb-2">
                                <small><?php echo $row['categ_name'] ?></small>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- Featured Products -->
        <div class="container">
                <!-- Best Sellers -->
                <!-- <div class="mt-5">
                    <div class="d-flex justify-content-between">
                        <h3>Best Sellers</h3>
                        <a class="my-auto" href="#">See all products</a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-5 mt-3 g-4"> -->

                        <?php
                        // $bs_pd = mysqli_query($conn, 'SELECT * FROM best_sellers;');
                        // while($row = mysqli_fetch_assoc($bs_pd)){
                        ?>
                        <!-- <div class="col">
                            <div class="card h-100">
                                <img class="img-fluid p-3" height="150" src="<?php echo $row['bs_img'] ?>" alt="image">
                                <div class="card-body">
                                <h5 class="card-title"><?php //echo $row['bs_name'] ?></h5>
                                <p class="card-text">Php <?php //echo $row['bs_price'] ?></p>
                                </div>
                            </div>
                        </div> -->
                        <?php //} ?>
                    <!-- </div>
                </div> -->

                <!-- Trending Items -->
                <!-- <div class="mt-5">
                    <div class="d-flex justify-content-between">
                        <h3>Trending Items</h3>
                        <a class="my-auto" href="#">See all products</a>
                    </div>
                    <div class="row row-cols-1 row-cols-md-5 mt-3 g-4"> -->
                        <?php
                        // $trend = mysqli_query($conn, 'SELECT * FROM trending_items;');
                        // while($row = mysqli_fetch_assoc($trend)){
                        ?>
                        <!-- <div class="col">
                            <div class="card h-100">
                            <img class="img-fluid p-3" height="150" src="<?php echo $row['ti_img'] ?>" alt="image">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo $row['ti_name']?></h5>
                                <p class="card-text">Php <?php echo $row['ti_price']?></p>
                                </div>
                            </div>
                        </div> -->
                        <?php //} ?>
                    <!-- </div>
                </div> -->
            </div>
        </div>

        <!-- Testimonials -->
        <div class="container my-5 pb-5">
            <div class="text-center">
                <p class="m-0" style="color: #003060;">TESTIMONIALS</p>
                <h3>What our clients say about us.</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 text-center mt-3 g-4">
                <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <i class="fa-solid fa-quote-left fa-lg" style="color: #055C9D;"></i>
                        <p class="card-text">Great quality products at affordable prices! I found everything I needed for my PC build. Highly recommended!</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <i class="fa-solid fa-quote-left fa-lg" style="color:rgb(39, 91, 146);"></i>
                        <p class="card-text">Sulit na sulit dito! Kumpleto ang parts, at ang bilis ng transaction. Sobrang accommodating pa ng staff. Hindi ka magsisisi.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <i class="fa-solid fa-quote-left fa-lg" style="color:rgb(39, 91, 146);"></i>
                        <p class="card-text">One-stop shop talaga for PC needs! Madali kausap at mabilis magbigay ng solution. Ang saya ng shopping experience ko dito!</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->    
        <div class="row justify-content-center align-items-center h-100 py-4" style="background-color:#055C9D;">
            <div class="col-11 col-md-10 col-lg-8">
                <div class="card col shadow-2-strong card-registration my-5" style="border-radius: 15px;">
                    <div class="card-body p-3 p-md-4">
                        <div class="mb-3">
                            <h4>Contact Us</h4>
                            <p>Fill out the form below, and we’ll respond as soon as possible!</p>
                        </div>
                        <?php
                            if (isset($_SESSION['contact'])) {
                                echo $_SESSION['contact'];
                                unset($_SESSION['contact']);
                            }
                        ?>
                        <form method="POST">
                            <!-- Name -->
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="">
                                <label for="name">Name</label>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <!--Email-->
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control rounded-3" id="email" placeholder="">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <!--Phone-->
                                    <div class="form-floating">
                                        <input type="tel+" name="phone" class="form-control rounded-3" id="phone" placeholder="">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Subject -->
                            <div class="form-floating mb-3">
                                <input type="text" name="subject" class="form-control rounded-3" id="subject" placeholder="">
                                <label for="subject">Subject</label>
                            </div>

                            <!-- Message -->
                            <div class="form-floating mb-3">
                                <textarea name="message" class="form-control rounded-3" id="message" rows="3" placeholder=""></textarea>
                                <label for="message">Message</label>
                            </div>

                            <div class="mt-3">
                                <input class="btn btn-lg w-100" type="submit" name="submitContactForm" value="Submit" style="color: white; background-color: #055C9D;" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Section -->
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <!-- Image Section -->
                <div class="col-12 col-md-6 mb-3 mb-lg-0 text-center text-lg-start">
                    <img class="img-fluid shadow" src="images/about-us-img.png" style="border-radius: 8px;" alt="">
                </div>
                
                <!-- Text Section -->
                <div class="col-12 col-md-6">
                    <p class="m-0" style="color: #003060;">ABOUT US</p>
                    <h3>Powering Your Tech Needs</h3>
                    <p class="m-0">
                        At M4Tech, we provide high-quality computer parts and accessories tailored for every tech enthusiast. 
                        Learn more about our mission, values, and what makes us your go-to tech partner.
                    </p>
                    <a class="btn btn-outline-dark mt-3 shadow-sm" href="about.php" type="button">Learn More</a>
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

    <?php include 'process.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/05d9027216.js" crossorigin="anonymous"></script>
</body>
</html>