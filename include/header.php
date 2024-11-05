<?php include('include/connect.php'); ?>

<?php
// Get the current script name
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left">
                    <ul>

                        <li class="address-item d-flex gap-1">
                            <i class="icofont-location-pin mb-auto mt-1"></i>
                            <a href="contact.php" class="text-wrap">Arnish Hospital, plot no.8 pocket 8, sector 19 Rohini On jail road Delhi 110085</a>
                        </li>
                        <li>
                            <i class="icofont-ui-call"></i>
                            <a href="tel:+0123456987">+9810155288</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="right">
                    <ul>
                        <li><span>Follow Us:</span></li>
                        <li><a href="https://www.facebook.com/profile.php?id=61559560915375" target="_blank"><i class="icofont-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/arnish-multi-specialty-hospital/" target="_blank"><i class="icofont-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icofont-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/arnish_hospital/" target="_blank"><i class="icofont-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area sticky-top">
    <div class="mobile-nav">
        <a href="index.php" class="logo">
            <img src="assets/img/logo1.png" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo1.png" class="logo-one" alt="Logo" height="45" width="200">
                    <img src="assets/img/logo1.png" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery.php" class="nav-link dropdown-toggle <?php echo ($current_page == 'gallery.php' || $current_page == 'videos.php') ? 'active' : ''; ?>">Gallery <i class="icofont-simple-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="gallery.php" class="nav-link <?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>">Photos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="videos.php" class="nav-link <?php echo ($current_page == 'videos.php') ? 'active' : ''; ?>">Videos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="service.php" class="nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">Services</a>
                             <?php
                                  
                                    $result = mysqli_query($conn, "select * from services");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                  

                                    <?php } ?>
                        </li>
                        <li class="nav-item">
                            <a href="team.php" class="nav-link <?php echo ($current_page == 'team.php') ? 'active' : ''; ?>">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="blog.php" class="nav-link <?php echo ($current_page == 'blog.php') ? 'active' : ''; ?>">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <a class="donate-btn d-none d-lg-block" href="contact.php">Make An Appointment</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
