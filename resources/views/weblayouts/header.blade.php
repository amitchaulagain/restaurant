<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>EduPath Global</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Append
    * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
    * Updated: May 01 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #menu-button {
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        #menu-options {
            display: none;
            position: absolute;
            top: calc(100% + 5px);
            left: 200px;
            width: 80%;
            background-color: rgba(255, 255, 255, 0.95);
            z-index: 999;
            padding: 20px;
            box-sizing: border-box;
        }

        #menu-options-services {
            display: none;
            position: absolute;
            top: calc(100% + 5px);
            left: 200px;
            width: 80%;
            background-color: white;
            z-index: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .country-grid {
            padding: 60px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 40px;
        }

        .option {
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s ease;
            color: black;
        }

        .option:hover {
            transform: scale(1.1);
        }

        .option img {
            max-width: 100%;
            max-height: 100px;
            margin-bottom: 10px;
        }
        #study-button {
            cursor: pointer;
        }
    </style>
<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="/">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="{{ asset('/public/images/uploads/logo').'/'. $siteSetting['logo_image'] ?? '' }}" width="90px"
                 height="90px" style="opacity:.8;margin-left: 45px">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>

                <li id="study-button"><a  class="">Study Destinations <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a></li>
                <div id="menu-options">
                    <div class="country-grid" style="color: black">
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/usa.svg" alt="USA">
                                <div>United States</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/ireland.svg" alt="USA">
                                <div>Ireland</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/europe.svg" alt="">
                                <div>Europe</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/canada.svg" alt="">
                                <div>Canada</div>
                            </div>
                        </a>
                        <!-- Add more country
                        options as needed -->
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/australia.svg" alt="Germany">
                                <div>Australia</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/asia.svg" alt="Germany">
                                <div>Asia</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/uk.svg" alt="Germany">
                                <div>United Kingdom</div>
                            </div>
                        </a>
                        <a href="/usa">
                            <div class="option">
                                <img src="assets/img/nz.svg" alt="Germany">
                                <div>New Zealand</div>
                            </div>
                        </a>
                    </div>


                </div>

                <li id="services-button"><a href="#hero" class="">Services <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a></li>
                <div id="menu-options-services">
                    <div class="country-grid">
                        <div class="option">
                            <div>Counselling</div>
                        </div>
                        <div class="option">
                            <div>Test Preparation</div>
                        </div>
                        <div class="option">
                            <div>Course, Country & University Selection</div>
                        </div>
                        <div class="option">
                            <div>Applications & Admission
                            </div>
                        </div>
                        <div class="option">
                            <div>Scholarships</div>
                        </div>

                        <div class="option">
                            <div>Internship</div>
                        </div>

                        <div class="option">
                            <div> Education Loan
                            </div>
                        </div>
                        <div class="option">
                            <div>Visa Processing</div>
                        </div>
                        <div class="option">
                            <div>Allied Services</div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById("study-button").addEventListener("click", function () {
                        var menuOptions = document.getElementById("menu-options");
                        if (menuOptions.style.display === "none") {
                            menuOptions.style.display = "block";
                        } else {
                            menuOptions.style.display = "none";
                        }
                    });
                    document.getElementById("services-button").addEventListener("click", function () {
                        var menuOptions = document.getElementById("menu-options-services");
                        if (menuOptions.style.display === "none") {
                            menuOptions.style.display = "block";
                        } else {
                            menuOptions.style.display = "none";
                        }
                    });
                </script>
                <li><a href="/contactus">Contact Us</a></li>

                <li><a href="#about">About</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>


    </div>
</header>
<main class="main">
