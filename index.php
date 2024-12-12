<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - OKELLO studio's Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


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

</head>

<body class="index-page">

<?php  include('./components/head.php') ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <h2><span>I'm </span><span class="underlight">OKELLO Studio's</span> a Professional<span> Photographer from RWANDA</span></h2>
            <a href="contact.php" class="btn-get-started">Available for Hire<br></a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->



    <!-- database gallery -->
     
  <section id="gallery" class="gallery section">
  <h1 class="btn btn-success text-white px-4 my-4 mx-4 col-12">MY Gallery <i class="bi bi-arrow-down-short"></i></h1>


<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4 justify-content-center">


        <?php

      $sql = "SELECT * FROM `gallery`";

      $query = mysqli_query($con , $sql);

      while( $row = mysqli_fetch_array($query)){
        ?>

    <div class="col-xl-3 col-lg-4 col-md-6">
    
        <div class="row">
            <div class="gallery-item h-100">
            <img src="./dashboard/<?php echo $row['image']?>" class="img-fluid" alt="" style="border-radius:10px; width:1024px; height: 400px; ">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="./dashboard/<?php echo $row['image']?>" title="<?php echo $row['title']?>" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
          </div>
        </div>
    
    </div><!-- End Gallery Item -->

    <?php } ?>

  </div>

</div>

</section><!-- /Gallery Section -->

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