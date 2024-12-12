<?php include("../connect.php"); 
session_start();
if (!isset($_SESSION['okello'])) {
    header("Location: ../login.php"); // Redirect to login if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - OKELLO studio's </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">
    <?php include ('./componet/head.php'); ?>
  <main class="main">
    <div class="row">
      <div class="col-md-12">
        <h3></h3>
      </div>
    </div>
    <div class="row p-4 m-4">
      <div class="col-md-5 d-flex justify-content-center align-items-center">
        <h1>Add gallery</h1>
      </div>
      <div class="col-md-7">
        <form class=" form" method="post" enctype="multipart/form-data">

          <div class="row mb-3">
            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Title</label>
            <div class="col-md-8 col-lg-9">
              <input name="title" type="text" class="form-control" id="currentPassword" required>
            </div>
          </div>

          <div class="row mb-3">
            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Gallery</label>
            <div class="col-md-8 col-lg-9">
              <input name="ifoto" type="file" class="form-control" id="newPassword" required>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success col-12" name="save">Add Gallery</button>
          </div>
           <?php

                                

                        if(isset($_POST['save'])){
                
                        $tilte = $_POST["title"];

                        $ifoto = $_FILES["ifoto"]["name"];
                        $loc = $_FILES["ifoto"]["tmp_name"];

                        $folder = "./images/".$ifoto;

                        move_uploaded_file( $loc , $folder );
                        
                        


                        $sql = "INSERT INTO `gallery`( `title`, `image`) VALUES ('$tilte','$folder')";


                        $res = mysqli_query($con,$sql);

                        if($res){
                            ?>
                            <script>
                            // window.location.href = "./index.php";
                            </script>
                            <?php
                        }else{
                            echo "<h1>data do not inserted</h1>";
                        }

                        }

?>
        </form><!-- End Change Password Form -->
      </div>

      </div>

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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>