<?php
    session_start();
    include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M4Tech - Contact</title>
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
        <div class="bg-image my-5" style="background-image: url(images/bg.png); background-position: center; background-size: cover; width: 100%; height: 400px; position: relative;">
            <div class="mask" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;">
                <div class="container d-flex flex-column justify-content-center align-items-center text-center h-100">
                    <h1 style="color: #003060;">Contact Us</h1>
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-8">
                            <p class="fs-5 fs-sm-6 m-0">We’re here to help! Whether you have a question about our products or need assistance, feel free to reach out to us. We’d love to hear from you!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <section class="h-100 pb-5">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-lg-2 g3">
                            <div class="card col shadow-2-strong card-registration" style="border-radius: 15px; background-color:rgb(230, 230, 230)">
                                <div class="card-body p-3 p-md-4">
                                    <div class="mb-4">
                                        <h4>Contact Form</h4>
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
                                            <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="" required>
                                            <label for="name">Name</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <!--Email-->
                                                <div class="form-floating">
                                                    <input type="email" name="email" class="form-control rounded-3" id="email" placeholder="" required>
                                                    <label for="email">Email Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <!--Phone-->
                                                <div class="form-floating">
                                                    <input type="tel+" name="phone" class="form-control rounded-3" id="phone" placeholder="" required>
                                                    <label for="phone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Subject -->
                                        <div class="form-floating mb-3">
                                            <input type="text" name="subject" class="form-control rounded-3" id="subject" rows="5" placeholder="" required>
                                            <label for="subject">Subject</label>
                                        </div>

                                        <!-- Message -->
                                        <div class="form-floating mb-3">
                                            <textarea name="message" class="form-control rounded-3" id="message" rows="3" placeholder="" required></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                        <div class="mt-3">
                                            <input class="btn btn-dark btn-lg w-100" type="submit" name="submitContactForm" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Get in Touch -->
                            <div class="col p-3 p-md-4">
                                <h4 class="mb-4 pb-2 pb-md-0 mb-md-4">Get in Touch with Us</h4>
                                <div class="row row-cols-1 row-cols-lg-2 g-3 mb-3">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-flex align-items-center justify-content-center me-2" style="padding: 0; width: 45px; height: 45px;">
                                                        <i class="fa-solid fa-location-dot" style="font-size: 2rem; color: #6c757d;"></i>
                                                    </div>
                                                    <div>
                                                        <small><b>Location</b><br>Nibaliw Sur, Bautista, Pangasinan</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-flex align-items-center justify-content-center me-2" style="padding: 0; width: 45px; height: 45px;">
                                                        <i class="fa-solid fa-phone" style="font-size: 2rem; color: #6c757d;"></i>
                                                    </div>
                                                    <div>
                                                        <small><b>Mobile</b><br>09605305265</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-lg-2 g-3 mb-5">
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-flex align-items-center justify-content-center me-2" style="padding: 0; width: 45px; height: 45px;">
                                                        <i class="fa-solid fa-clock" style="font-size: 2rem; color: #6c757d;"></i>
                                                    </div>
                                                    <div>
                                                        <small><b>Availability</b><br>Monday to Saturday: 8AM - 5PM</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-start">
                                                    <div class="d-flex align-items-center justify-content-center me-2" style="padding: 0; width: 45px; height: 45px;">
                                                        <i class="fa-solid fa-envelope" style="font-size: 2rem; color: #6c757d;"></i>
                                                    </div>
                                                    <div>
                                                        <small><b>Email</b><br>m4techsales@gmail.com</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Follow Us -->
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-10">
                                        <p class="mb-0"><b>Social Media</b><br>Follow us on facebook for product updates and promotions!</p>
                                    </div>
                                    <div class="col-2 d-flex align-items-center justify-content-center" style="padding: 0; width: 45px; height: 45px;">
                                        <a href="https://www.facebook.com/profile.php?id=61556641396317" target="_blank">
                                            <i class="fa-brands fa-square-facebook" style="font-size: 2.5rem; color: #316FF6;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.892223424981!2d120.4575062737906!3d15.809635946337844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339149002fc1980d%3A0x383b2c4deef6afb4!2sM4tech%20Computer%20Parts%20and%20Accessories!5e0!3m2!1sen!2sph!4v1735905471562!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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