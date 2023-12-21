<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JD Builders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- External css links -->
    <link href="css/index.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">

    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Aos cdn link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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

    <!-- About us header section -->
    <div class="container-fluid position-relative p-0 contact_heading_container">
        <img src="asset/contactus/contact-us-header-2.jpg" alt="" class="contact_header_image">

        <h1 class="text-center position-absolute top-50 start-50 translate-middle">About Us</h1>
    </div>
    <!-- About us header section end -->



    <!-- About us section -->
    <div class="container mt-5">
        <!-- First part -->
        <div class="row">
            <div class="col-6">
                <h3 id="first_heading">
                    Welcome to JD Builder, where we transform dreams into structures!
                </h3>
                <p class="text-justify" id="first_paragraph">
                    Established with a passion for excellence and a commitment to unparalleled craftsmanship,
                    JD Builder is a newly incorporated construction company dedicated to delivering top-notch
                    construction services across a spectrum of projects. Whether you envision a cozy home,
                    a modern office space, or a commercial establishment, JD Builder is here to turn your
                    aspirations into reality.
                </p>
            </div>

            <div class="col-6" data-aos="slide-left">
                <img src="asset/aboutus/about-us-build-1.jpg" alt="" height="350" width="550" id="first_image">
            </div>
        </div>
        <!-- First part end -->

        <!-- Second part -->
        <div class="row mt-5">
            <div class="col-6" data-aos="slide-right">
                <img src="asset/aboutus/about-us-our-vision.jpg" alt="" height="350" width="550" id="second_image">
            </div>

            <div class="col-6">
                <h3 id="second_heading">
                    Our Vision
                </h3>
                <p class="text-justify" id="second_paragraph">
                    At JD Builder, our vision is to be a trusted partner in construction,
                    known for our unwavering dedication to quality, innovation, and client satisfaction.
                    We aim to set new benchmarks in the industry by combining traditional values with
                    cutting-edge technology, ensuring that each project we undertake reflects the highest
                    standards of craftsmanship and durability.
                </p>
            </div>
        </div>

        <!-- Second part end -->

        <!-- Third part -->
        <div class="row mt-5">
            <div class="col-6">
                <h3 id="third_heading">
                    Our Mission
                </h3>
                <p class="text-justify" id="third_paragraph">
                    Our mission is to build not just structures but lasting relationships with our clients.
                    We strive to provide comprehensive construction solutions tailored to meet the unique
                    needs of each project. From meticulous planning to flawless execution, JD Builder is
                    committed to excellence at every stage of construction, ensuring that our clients receive
                    the finest results that stand the test of time.
                </p>
            </div>

            <div class="col-6" data-aos="slide-left">
                <img src="asset/aboutus/about-us-our-mission.jpg" alt="" height="350" width="550" id="third_image">
            </div>
        </div>

        <!-- Third part end -->
    </div>

    <!-- About us section end -->
   
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

                    <!-- Phone -->
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col">
                            <p>
                                Er. Jatinder Kumar - +91-8591262068,
                            </p>
                            <p>
                                Er. Deepak Kumar - +91-9041878329
                            </p>
                        </div>
                    </div>
                    <!-- Phone end -->

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
    
  