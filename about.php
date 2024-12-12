<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - OKELLO studio's Bootstrap Template</title>
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

<body class="about-page">

<?php  include('./components/head.php') ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">

      <nav class="breadcrumbs">
        <div class="container d-flex justify-content-between">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
          <div class="contact">
            <a href="contact.php" class="btn-success">Available for Hire<br></a>
          </div>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Photographer from Kigali Rwanda &amp; Videographer</h2>
            <?php

              $sql = "SELECT * FROM `okello`";

              $query = mysqli_query($con , $sql);

              while( $row = mysqli_fetch_array($query)){
                ?>
            <p class="py-3">
         
                <?php echo $row['about'] ?>
            </p>
            <p class="fst-italic py-3 mt-4">
               <button class="btn text-white btn-success col-12">More Info <i class="bi bi-arrow-down-short"></i></button>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $row['birth'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $row['website'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $row['phone'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $row['city'] ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $row['age'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $row['degree'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo $row['freelance'] ?></span></li>
                </ul>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


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