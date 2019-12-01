<?php
// define variables and set to empty values

function renderWebPage($user = false, $name = NULL,$error){
    $message = 'Login Failed';
    if($error){
        $message = $error;
    }
    if($user){
        $message = 'Welcome'.$name;
    }
    echo '
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
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>'.
             $message
            .'</h3>
        </div>
    </body>
    ';
    if($user){
        echo '<div class="have_question">
          <div class="container">
              <div class="row">
                  <div class="col-xl-10 offset-xl-1">
                      <div class="single_border">
                          <div class="row align-items-center">
                              <div class="col-xl-6 col-md-4 col-lg-6">
                                  <h3>Welcome back</h3>
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
      </div>';
    }
}

function testInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function checkUsernameAndPassword($user,$pass){
    require 'connection.php';
    $user = testInput($user);
    $pass = testInput($pass);
    $query = "SELECT * from Person WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        echo "NUM OF ROWS 1";
        return $row["username"];
    }else{
        return NULL;
    }
}

$result = NULL;
$username = NULL;
$password = NULL;
$error = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $error = "Email is required";
  }else{
      $username = $_POST["username"];
  }

  if (empty($_POST["password"])) {
    $error = "Password is required";
  }else{
      $password = $_POST["password"];
  }

  if(is_null($error)){
    $result = checkUsernameAndPassword($username,$password);
    if(is_null($result)){
        renderWebPage(false,NULL,'No Auth Found');
    }else{
        renderWebPage(true,$result,NULL);
    }
  }else{
      renderWebPage(false,NULL,$error);
  }

}
?>
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