<?php include('../connect.php') ; 

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
  <title>Index - OKELLO studio's Bootstrap Template</title>
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
    <div class="row m-4 p-4 d-flex justify-content-center">
      <div class="col-md-12">
        <h3 class="text-left  text-white">Edit Your Profile</h3>
      </div>
    </div>
    <div class="row m-4 p-4">
      <div class="col-md-10">
        <form method="post">
              <?php
                $sql = "SELECT * FROM `okello`";

                $query = mysqli_query( $con ,$sql);

                while($row = mysqli_fetch_array($query)){
                    ?>
                 
          <div class="row mb-3">
            <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
            <div class="col-md-8 col-lg-9">
              <input name="names" type="text" class="form-control " id="" value="<?php echo $row['name'];?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
            <div class="col-md-8 col-lg-9">
              <textarea name="about" class="form-control  " id="about" style="height: 100px"><?php echo $row['about'];?></textarea>
            </div>
            </div>
          <div class="row mb-3">
            <label for="Country" class="col-md-4 col-lg-3 col-form-label">Phone</label>
            <div class="col-md-8 col-lg-9">
              <input name="number" type="number" class="form-control  " id="Country" value="<?php echo $row['phone'];?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
            <div class="col-md-8 col-lg-9">
              <input name="email" type="email" class="form-control  " id="Email" value="<?php echo $row['email'];?>">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success col-12" name="save">Save Changes</button>
          </div>
          <?php } ?>
        </form><!-- End Profile Edit Form -->
       
      </div>
    </div>
  </main>
  <style>
    input,textarea{
      opacity: .;
      font-weight: bold;
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
<?php

            if(isset($_POST['save'])){

            $name = $_POST['names'];
            $about = $_POST['about'];
            $phone = $_POST['number'];
            $email = $_POST['email'];
 

            $sql1= "UPDATE `okello` SET `name`='$name',`about`='$about',`phone`='$phone',`email`='$email'";


            $check = mysqli_query( $con ,$sql1);
                if($check){
                    ?>
                    <script>
                        alert("data modifiedsuccessfull")
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        alert("data do not do not modified");
                    </script>
                    <?php
                }
            }
?>