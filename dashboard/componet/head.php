<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1 class="sitename">OKELLO studio's</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active ">Home<i class="bi bi-house  mx-1"><br></i></a></li>
          <li><a href="message.php">messages<i class="bi bi-chat-dots mx-1"><br></i></a></li>
          <li class="dropdown"><a href="gallery.php"><span>Profile</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="gallery.php"><span>View Gallery</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                <li><a href="add.php">Upload New Gallery<i class="bi bi-cloud-upload"></i></a></li>
                  <li><a href="view.php">View Gallery <i class="bi bi-eye"></i></a></li>
                </ul>
             </li>
              <li><a href="edit.php">Edit profile<i class="bi bi-pencil-square"></i></a></li>
              <li><a href="password.php">password<i class="bi bi-lock"></i></a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Notifications</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="nots.php">Add Notification</a></li>
              <li><a href="viewn.php">View Notifications <i class="bi bi-eye"></i></a></li>
            </ul>
          </li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="logout.php" class=""><i class="bi bi-box-arrow-in-right"></i></a>
      </div>

    </div>
</header>