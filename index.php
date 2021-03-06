<?php
include 'functions.php';

if (isset($_POST['sendMessage'])) {
    sendMessage($_POST);
}

function sendMessage($post)
{
    global $con;
    extract($post);
    $stmt = $con->prepare("INSERT INTO feedback (name, email, subject, message) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->affected_rows > 0) {
            header('location: index.php?success=1&message=Your message has been received');
        } else {
            header('location: index.php?success=1&message=Failed: ' . $stmt->error);
        }
    } else {
        echo "ERROR: " . $stmt->error;
    }
}


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Covid-19 Updates</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/applogo.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="./">home</a></li>
                                        <li><a href="#features">Features</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="<?php echo $download_url; ?>" download>Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-md-5 mt-3">
                        <div class="slider_text mt-5 ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">Covid-19 updates App
                                gives you latest updates about coronavirus
                            </h3>
                            <!-- <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">Get more users to promote your app with this template</p> -->
                            <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="<?php echo $download_url; ?>" download class="boxed-btn3">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="phone_thumb wow fadeInDown" data-wow-duration="1.1s" data-wow-delay=".2s">
                            <img src="img/ilstrator/covid-dashboard.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
                        <h3>Stay updated with the <br>
                            latest Covid-19 Updates</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                        <div class="thumb">
                            <img src="img/icon/2.svg" alt="">
                        </div>
                        <h3>View Reports in <br>
                            One Place</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                        <div class="thumb">
                            <img src="img/icon/1.svg" alt="">
                        </div>
                        <h3>From reliable <br>
                            data sources</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">

                    <div class="single_service text-center wow fadeInUp " data-wow-duration=".8s" data-wow-delay=".6s">
                        <div class="thumb">
                            <img src="img/icon/3.svg" alt="">
                        </div>
                        <h3>Learn awareness<br>
                            Stay Safe</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->




    <!-- about  -->
    <a name="features"></a>
    <div class="features_area ">
        <div class="container">
            <div class="features_main_wrap">
                <div class="row  align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="features_info2">
                            <h3>Features that give
                                you real feel</h3>
                            <p>This app is designed to meet the users needs and its easy to get what you need on the go.
                                <br>
                                Download now to get all the updates.
                            </p>
                            <div class="about_btn">
                                <a class="boxed-btn4" href="<?php echo $download_url; ?>" download>Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
                        <div class="about_draw wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">
                            <img src="img/ilstrator_img/draw.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="features_main_wrap">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7">
                        <div class="about_image wow fadeInLeft" data-wow-duration=".4s" data-wow-delay=".3s">
                            <img src="img/ilstrator/covid-list.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="features_info">
                            <h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">Easy setup and <br>
                                management</h3>
                            <p class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">This app is designed to
                                meet your needs and keep you updated.</p>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s"> Its easy to get
                                    what you need on the go. </li>
                                <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".6s"> User friendly
                                    interface </li>
                                <li class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".7s">
                                    Creating awareness of Covid-19
                                </li>
                            </ul>

                            <div class="about_btn wow fadeInUp" data-wow-duration=".10s" data-wow-delay=".8s">
                                <a class="boxed-btn4" href="<?php echo $download_url; ?>" download>Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- productivity_area  -->
    <div class="productivity_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">Get started now <br>
                        and get all the updates during this pandemic.</h3>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="about_btn wow fadeInUp" data-wow-duration=".10s" data-wow-delay=".8s">
                            <a class="boxed-btn4" href="<?php echo $download_url; ?>" download>Download Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ productivity_area  -->

    <a name="contact"></a>
    <div class="features_area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form class="form-contact contact_form" action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter message here..." required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="sendMessage" class="button button-contactForm boxed-btn" value="Send" />
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="features_info">
                        <h3 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">Stay Home <br></h3>

                        <ul>
                            <li class="wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">Stay Safe</li>
                            <li class="wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".5s">Help stop the spread</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-lg-2">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/applogo.svg" alt="">
                                </a>
                            </div>
                            <p>
                                Poviding the statistics for you.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-1 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#!">Covid-19 Updates per country</a></li>
                                <li><a href="#!">Number of cases per country</a></li>
                                <li><a href="#!">Control measures as recommended by W.H.O</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>

                                <li><a href="https://documenter.getpostman.com/view/10808728/SzS8rjbc?version=latest" target="_blank">Data source</a></li>
                                <li><a href="https://www.who.int/" target="_blank">W.H.O</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Downloads
                            </h3>
                            <ul>
                                <li>
                                    <div class="about_btn wow fadeInUp" data-wow-duration=".10s" data-wow-delay=".8s">
                                        <a class="boxed-btn4" href="<?php echo $download_url; ?>" download>Download Now</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> @Covid-19 Updates App</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>