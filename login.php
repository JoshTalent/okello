<?php include("connect.php") ; session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gallery - OKELLO studio's </title>
  <meta name="description" content="">
  <meta name="keywords" content="a">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OKELLO studio's
  * Template URL: https://gnintellex.netlify.app/OKELLO studio's-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: GN IntelleX.com
  * License: https://gnintellex.netlify.app/license/
  ======================================================== -->
</head>

<body class="gallery-page">

<?php  include('./components/head.php') ?>

  <main class="main">

    <!-- Page Title -->
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">

      <nav class="breadcrumbs">
        <div class="container d-flex justify-content-between">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Login Here</li>
          </ol>
          <div class="contact">
            <a href="contact.php" class="btn-success">Available for Hire<br></a>
          </div>
        </div>
      </nav>
    </div><!-- End Page Title -->
  <div class="row">
    <div class="col-md-12">
      <h3></h3>
    </div>
  </div>
  <div class="row p-4 m-4">
    <div class="col-md-5 d-flex justify-content-center align-items-center">
      <h1>Login Here</h1>
    </div>
    <div class="col-md-7">
    
      <form class=" form" method="post">

      <div class="row mb-3">
          <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
          <div class="col-md-8 col-lg-9">
            <input name="email" type="email" class="form-control" id="newPassword">
          </div>
        </div>

        <div class="row mb-3">
          <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
          <div class="col-md-8 col-lg-9">
            <input name="password" type="password" class="form-control" id="currentPassword">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success col-12" name="login">Join Here</button>
        </div>
      </form><!-- End Change Password Form -->
      <?php
           if(isset($_POST['login'])){

            $email = $_POST['email'];
            $pass = $_POST['password'];
             $sql = "SELECT * FROM `okello` WHERE  `email`= '$email' and `password`='$pass'  ";
             $query = mysqli_query( $con, $sql);
             $row = mysqli_num_rows($query);
             if($row == 1){
              $_SESSION["okello"] = $email;
                ?>
                 <script>
                    window.location.href="./dashboard/index.php";
                 </script>
                <?php
             }
           }
        ?>
    </div>

    </div>
    <style>
        input{
            opacity:.1; 
        }
    </style>
  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">OKELLO studio's</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://gnintellex.netlify.app/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://gnintellex.netlify.app/">GN IntelleX</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>