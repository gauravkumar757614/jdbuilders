<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JD Builders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- External css links -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Aos cdn link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Boxicon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- Navbar -->
    <div class="nav-container">
        <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="container-fluid">
                <a class="navbar-brand nv-brnd" href="landing.php">
                    <img src="asset/logo.jpg" alt="logo" width="50">
                    <span class="logo_text">
                       JD Builders
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="about.php">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu bg-dark text-white">
                                <li><a class="dropdown-item" href="#">Residential</a></li>
                                <li><a class="dropdown-item" href="#">industrial</a></li>
                                <li><a class="dropdown-item" href="#">commercial</a></li>
                                <li><a class="dropdown-item" href="#">Government Contractors</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="plans.php">Plans</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar end -->

    <!-- Hero section -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" 
            aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/landing11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>"Building Dreams, Crafting Realities – Your Trusted Construction Partner!"</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                    <div class="slider-button">
                        <a href="#basic_heading" class="btn btn-primary"> Explore</a>
                        <a href="plans.php" class="btn btn-primary"> See Plans</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/landing12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> "Building Construction with Easy EMI - Your Dream Project, Now Affordable."</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <div class="slider-button">
                        <a href="#basic_heading" class="btn btn-primary"> Explore</a>
                        <a href="plans.php" class="btn btn-primary"> See Plans</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="asset/landing13.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <div class="slider-button">
                        <a href="#basic_heading" class="btn btn-primary"> Explore</a>
                        <a href="plans.php" class="btn btn-primary"> See Plans</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Hero section end -->

    <!-- Basic inform -->
    <section class="basic_info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 mt-5">
                    <h3 id="basic_heading">
                        JD Builders
                    </h3>
                    <p id="basic_para">
                        Established with a passion for excellence and a commitment to unparalleled craftsmanship,
                        JD Builders is a newly incorporated construction company dedicated to delivering top-notch
                        construction services across a spectrum of projects. Whether you envision a cozy home,
                        a modern office space, or a commercial establishment, JD Builder is here to turn your
                        aspirations into reality.
                    </p>

                    <p id="basic_para">
                        At JD Builder, we understand that each project is unique, requiring a tailored approach.
                        From the initial consultation to the final touches, we collaborate closely with our clients
                        to capture their vision and exceed expectations. Our portfolio showcases a diverse range of
                        successfully completed projects, from residential marvels that epitomize comfort to cutting-edge
                        commercial spaces that foster productivity.
                    </p>

                    <p id="basic_para">
                        Driven by a passion for quality and client satisfaction, JD Builder is more than a construction
                        company; we are your trusted partner in transforming spaces. Embracing the latest technologies
                        and construction methodologies, we strive to create environments that stand the test of time.
                        Choose JD Builder for a construction experience that goes beyond bricks and mortar, crafting
                        spaces that inspire and endure.
                    </p>
                </div>
                <div class="col-6 mt-5">
                    <div class="right_side">
                        <img src="asset/basicinfo/basic1.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Basic inform end -->
    
    <!-- Footer section -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container text-md-left">
            <div class="row text-md-left">

                <div class="col-5 px-3">
                    <h5 class="text-uppercase mb-4">
                        JD Builders
                    </h5>
                    <p id="footer_definition">
                        JD Builder is a newly incorporated construction company dedicated to delivering top-notch
                        construction services across a spectrum of projects. Whether you envision a cozy home,
                        a modern office space, or a commercial establishment, JD Builder is here to turn your
                        aspirations into reality.
                    </p>
                    <!-- Social links -->
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <span>
                                    <a href="https://facebook.com" class="social_link">
                                        <i class='bx bxl-facebook-circle'></i>
                                    </a>
                                </span>
                                <span class="mx-2">
                                    <a href="https://instagram.com" class="social_link">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </span>
                                <span class="mx-2">
                                    <a href="https://linkedin.com" class="social_link">
                                        <i class='bx bxl-linkedin-square'></i>
                                    </a>
                                </span>
                                <span class="mx-2">
                                    <a href="https://twitter.com" class="social_link">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Social links end -->
                </div>

                <div class="col-5">
                    <h5 class="text-uppercase mb-4">
                        Contact us
                    </h5>
                    <!-- Address -->
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="col">
                            <p>
                                AGGARWAL ENCLAVE, BALLOKE ROAD, LUDHIANA - 141001
                            </p>
                        </div>
                    </div>
                    <!-- Address end -->

                    <!-- Email -->
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col">
                            <p>
                                gauravkumar@gmail.com
                            </p>
                        </div>
                    </div>
                    <!-- Email end -->
                </div>

                <!-- Quikc links -->
                <div class="col-2">
                    <h5 class="text-uppercase mb-4">
                        Quick links
                    </h5>
                    <p>
                        <a href="index.php" class="text-white" id="footer_links" style="text-decoration: none;"> Home </a>
                    </p>
                    <p>
                        <a href="about.php" class="text-white footer_links" style="text-decoration: none;"> About </a>
                    </p>
                    <p>
                        <a href="services.php" class="text-white footer_links" style="text-decoration: none;"> Services </a>
                    </p>
                    <p>
                        <a href="plans.php" class="text-white footer_links" style="text-decoration: none;"> Plans </a>
                    </p>
                    <p>
                        <a href="contact.php" class="text-white footer_links" style="text-decoration: none;"> Contact </a>
                    </p>
                </div>

                <!-- Quikc links end -->

                <hr class="mb-4">

                <!-- Copy right -->
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright 2023 All rights reserved by:
                            <a href="" style="text-decoration: none;">
                                <strong class="text-warning">JD Builders</strong>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Copy right end -->
            </div>
        </div>
    </footer>
     <!-- Footer section end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            delay: 0,
            duration: 1000,
        });
    </script>

</body>

</html>