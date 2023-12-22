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
        <nav class="navbar navbar-expand-lg backcolor text-white">
            <div class="container-fluid">
                <a class="navbar-brand nv-brnd" href="index.php">
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
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="services.php">Services</a>
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
    <footer class="bg-dark text-white pb-4 pt-5 mt-1 footer_section">
        <div class="container">

            <div class="row">
                <!-- Company definition part -->
                <div class="col-6">
                    <h4>JD BUILDERS</h4>
                    <P class="company_defi mt-3">
                        JD Builder is a newly incorporated construction company dedicated to delivering top-notch
                        construction services across a spectrum of projects. Whether you envision a cozy home,
                        a modern office space, or a commercial establishment, JD Builder is here to turn your
                        aspirations into reality.
                    </P>
                    <div class="d-flex">
                        <a href="https://facebook.com" class="social_link social1">
                            <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="https://instagram.com" class="social_link social2">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://linkedin.com" class="social_link social2">
                            <i class='bx bxl-linkedin-square'></i>
                        </a>
                        <a href="https://twitter.com" class="social_link social2">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </div>
                </div>

                <!-- Company address section -->
                <div class="col-4">
                    <h4>CONTACT US</h4>
                    <p class="address">
                        Aggarwal enclave, opposite miraj palace,
                        Ludhiana - 141001
                    </p>
                    <p class="main">
                        gauravkumar@gmail.com
                    </p>
                </div>

                <!-- Company quick links section -->
                <div class="col-2">
                    <h4>QUICK LINKS</h4>
                    <ul class="quick_links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="plans.php">plans</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <hr>
        <p class="text-center">© 2023 JD BUILDERS. All Right Reserved.</p>
    </footer>
    <!-- Footer section end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            // offset: 200,
            // delay: 0,
            // duration: 1000,
        });
    </script>

</body>

</html>