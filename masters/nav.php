
  <!-- ======= nav ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><span>LS301</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'background.php') ? 'active' : ''; ?>" href="background.php">Background</a></li>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'theme.php') ? 'active' : ''; ?>" href="theme.php">Theme Analysis</a></li>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'research.php') ? 'active' : ''; ?>" href="research.php">Research Information</a></li>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'interview.php') ? 'active' : ''; ?>" href="interview.php">Interview Background and Results</a></li>
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'discussion.php') ? 'active' : ''; ?>" href="discussion.php">Discussion</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                </ul>
            </li> -->
          <li><a class="nav-link scrollto <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'aboutus.php') ? 'active' : ''; ?>" href="aboutus.php">About Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End nav -->