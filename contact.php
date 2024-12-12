<?php include("connect.php");  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - OKELLO studio's Bootstrap Template</title>
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

<body class="contact-page">

<?php  include('./components/head.php') ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">

      <nav class="breadcrumbs">
        <div class="container d-flex justify-content-between">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
          <div class="contact">
            <a href="contact.php" class="btn-success">Available for Hire<br></a>
          </div>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" class="m-4" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Location</h3>
                  <p>Nyarugenge ,Kigali RWANDA</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call</h3>
                  <p>+250 786 026 717</p>
                </div>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>okellostudio@gmail.com</p>
                </div>
              </div>
            </div><!-- End Info Item -->
              
          </div>
          
        <form  method="post" class="form m-4" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

       
              <button type="submit" class="btn btn-success col-12" name="save">Send Message</button>
          </div>
        </form><!-- End Contact Form -->
        <?php

          if(isset($_POST['save'])){

             $name = $_POST['name'];
             $email = $_POST['email'];
             $subject = $_POST['subject'];
             $message = $_POST['message'];

             $sql = "INSERT INTO `messages`( `name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

             $solution = mysqli_query($con , $sql);

             if($solution){
              ?>
                <script>
                  alert("data sent successfully")
                </script>
              <?php
             }else{
              ?>
              <script>
                alert("data didn't sent")
              </script>
              <?php }} ?>

        </div>


      </div>

    </section><!-- /Contact Section -->

  </main>
  <style>
    input , textarea {
      opacity: .1;
    }
  </style>

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