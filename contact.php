<?php

session_start();

$name_error     = '';
$email_error    = '';
$phone_error    = '';
$plan_error     = '';
$message        = '';

$name       =       isset($_SESSION['name']) ? $_SESSION['name'] : '';
$email      =       isset($_SESSION['email']) ? $_SESSION['email'] : '';
$phone      =       isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$plan       =       isset($_SESSION['plan']) ? $_SESSION['plan'] : '';

if (isset($_GET['name'])) {
    $name_error = $_GET['name'];
}
if (isset($_GET['email'])) {
    $email_error = $_GET['email'];
}
if (isset($_GET['phone'])) {
    $phone_error = $_GET['phone'];
}
if (isset($_GET['plan'])) {
    $plan_error = $_GET['plan'];
}



?>
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

    <!-- Contact us header section -->
    <div class="container-fluid position-relative p-0 contact_heading_container">
        <img src="asset/contactus/contact-us-header-2.jpg" alt="" class="contact_header_image">

        <h1 class="text-center position-absolute top-50 start-50 translate-middle">Contact Us</h1>
    </div>
    <!-- Contact us header section end -->
    <?php
    if (isset($_GET['success'])) {
        $message = $_GET['success'];

        echo    "
                <div class='container'>
                <div class='alert alert-success alert-dismissible fade show mt-2 fw-bolder fs-3 text-center' role='alert'>
                    $message!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                </div>";
    }
    ?>
    <!-- Contact us -->
    <div class="container mt-5">

        <div class="row ">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="cart-title text-center">Mail us</h1>
                        <form action="contact_process.php" method="POST">
                            <div class="row">
                                <!-- Name field -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="form-label"> Name </label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($name); ?>">
                                        <span style="color:red"> <?php echo $name_error;  ?> </span>
                                    </div>
                                </div>
                                <!-- Name field  end -->

                                <!-- Email field -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email" class="form-label"> Email </label>
                                        <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                                        <span style="color:red"> <?php echo $email_error;  ?> </span>
                                    </div>
                                </div>
                                <!-- Email field end -->
                            </div>

                            <div class="row">
                                <!-- Phone field -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="phone" class="form-label"> Phone </label>
                                        <input type="number" name="phone" id="phone" class="form-control" value="<?php echo htmlspecialchars($phone); ?>">
                                        <span style="color:red"> <?php echo $phone_error;  ?> </span>
                                    </div>
                                </div>
                                <!-- Phone field end -->

                                <!-- Plan field -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="plan">Dream plan</label>
                                        <select name="plan" id="plan" class="form-control">
                                            <option value="">Select</option>
                                            <option value="799">1199</option>
                                            <option value="1499">1499</option>
                                            <option value="2499">1999</option>
                                            <option value="3499">2499</option>
                                            <option value="4999">2999</option>
                                            <option value="4999">3499</option>
                                            <option value="4999">3999</option>
                                            <option value="4999">4499</option>
                                            <option value="4999">4999</option>
                                        </select>
                                        <span style="color:red"> <?php echo $plan_error;  ?> </span>
                                    </div>
                                </div>
                                <!-- Plan field end -->
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary mt-3 block" type="submit" name="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="cart-title text-center"> Visit us</h1>
                        <!-- Address field -->
                        <div class="row">
                            <div class="col-1">
                                <span class="" id="address-icon"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <div class="col">
                                <p class="card-text text-justify">
                                    H. NO. 1556, AGGARWAL ENCLAVE, BALLOKE ROAD, DISTRICT LUDHIANA - 141001
                                </p>
                            </div>
                        </div>
                        <!-- Address field end -->

                        <!-- Email field -->
                        <div class="row">
                            <div class="col-1">
                                <span>
                                    <i class="far fa-envelope"></i>
                                </span>
                            </div>

                            <div class="col">
                                <p class="card-text">
                                    gauravkumar@gmail.com
                                </p>
                            </div>

                        </div>
                        <!-- Email field end -->

                        <!-- Phone field -->
                        <div class="row">
                            <div class="col-1">
                                <span>
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <div class="col">

                                <div class="phone_number">
                                    <p class="cart-text">
                                        +91-8591262068,
                                        +91-8591262068
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Phone field end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us end -->

    <!-- Footer secion -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container text-md-left">
            <div class="row text-md-left">

                <div class="col-5">
                    <h5 class="text-uppercase mb-4">
                        JD Builders
                    </h5>
                    <p id="footer_definition">
                        JD Builder is a newly incorporated construction company dedicated to delivering top-notch
                        construction services across a spectrum of projects. Whether you envision a cozy home,
                        a modern office space, or a commercial establishment, JD Builder is here to turn your
                        aspirations into reality.
                    </p>
                </div>


                <div class="col-4">
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
                                H. NO. 1556, AGGARWAL ENCLAVE, BALLOKE ROAD, DISTRICT LUDHIANA - 141001
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
                                Mr. Jatinder Kumar - +91-8591262068,
                            </p>
                            <p>
                                Mr. Deepak Kumar - +91-9041878329
                            </p>
                        </div>
                    </div>
                    <!-- Phone end -->

                </div>

                <!-- Quikc links -->
                <div class="col-3">
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