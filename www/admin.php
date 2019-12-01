<?php


function getUserList(){
    require 'connection.php';
    $list = [];
    $query = "SELECT username FROM Person";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) >= 1){
        while($row = mysqli_fetch_array($result)){
            // print_r($row);
            array_push($list, $row["username"]);
        }
    }
    return $list;
}

$users = getUserList();
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AmmuFly</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
    <link rel="stylesheet" href="css/animate.css">
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
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
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

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>ADMIN PANEL</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- core_features_start -->
    <div class="core_features2 faq_area">
            <div class="container">
                <div class="border-bottm">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="featurest_tabs ">
                                <nav>
                                    <div class="nav" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MEMBER LIST</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div id="accordion">
                                            <?php
                                            foreach($users as $key){
                                                echo '<div class="card"> <div class="card-header" id="headingTwo"> <h5 class="mb-0"> <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="flaticon-user"></i>';
                                                echo $key;
                                                echo '</button> </h5> </div> </div>';
                                            }
                                            ?>
                                        </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- core_features_end -->

    <!-- have_question_start -->
    <!-- <div class="have_question">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="single_border">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <h3>Have any Question?</h3>
                            </div>
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="chat">
                                    <a class="boxed_btn_green" href="#">
                                        <i class="flaticon-chat"></i>
                                        <span>Live Chat</span>
                                    </a>
                                    <a class="boxed_btn_green2" href="#">
                                            get start now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- have_question_end -->

    <!-- footer -->
    <!-- <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                        <a href="#">
                                                <img src="img/logo.png" alt="">
                                            </a>
                                </div>
                                <p class="footer_text doanar"> <a class="first" href="#">+10 783 467 3789
                                    </a> <br>
                                    <a href="#">hostza@support.com</a></p>
                                    <div class="socail_links">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
    
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    service
                                </h3>
                                <ul>
                                    <li><a href="#">Hosting</a></li>
                                    <li><a href="#">Domain</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Shared Hosting</a></li>
                                </ul>
    
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Navigation
                                </h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Rooms</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Newsletter
                                </h3>
                                <form action="#" class="newsletter_form">
                                    <input type="text" placeholder="Enter your mail">
                                    <button type="submit">Sign Up</button>
                                </form>
                                <p class="newsletter_text">Subscribe newsletter to get updates</p>
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
                            <p class="copy_right text-center"> -->
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <!-- </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- footer -->
        <!-- link that opens popup -->
    
        <!-- form itself end-->
        <!-- <form id="test-form" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="img/form-logo.png" alt="">
                        </a>
                    </div>
                    <h3>Sign in</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="Enter email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_green">Sign in</button>
                            </div>
                        </div>
                    </form>
                    <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a> </p>
                </div>
            </div>
        </form> -->
        <!-- form itself end -->
    
        <!-- form itself end-->
        <!-- <form id="test-form2" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="img/form-logo.png" alt="">
                        </a>
                    </div>
                    <h3>Resistration</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <input type="email" placeholder="Enter email">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="Password" placeholder="Confirm password">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_green">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form> -->
        <!-- form itself end -->

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