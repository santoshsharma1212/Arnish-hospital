<!DOCTYPE html>
<html lang="zxx">

<?php include('include/head.php')?>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="pre-box-one">
<div class="pre-box-two"></div>
</div>
</div>
</div>
</div>


<?php include('include/header.php')?>
<?php
$url = isset($_GET['url']) ? $_GET['url'] : ""; // Set $url variable from URL parameter
$sql = "SELECT * FROM `services` WHERE `status` = '1' and `url`='$url'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <title><?php echo $row['meta_title']?></title>
    <meta name="meta_title" content="<?= $row['meta_title'] ?>" />
    <meta name="meta_desc" content="<?= $row['meta_desc'] ?>" />
    <meta name="meta_keyword" content="<?= $row['meta_keyword'] ?>" />
<?php } ?>

<div class="page-title-area title-bg-three">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="title-item">
<h2>Service Details</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>
<span>Service Details</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="donation-details-area ptb-100">
<div class="container">
<div class="row">
    	<?php
					if (isset($_GET['url'])) {
						$url = $_GET['url'];
						$sql = " SELECT * FROM `services` where `url`= '$url' ";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
					}
					?>
<div class="col-lg-8">
<div class="details-item">
<div class="details-img">
<img src="Uploads/services/<?php echo $row['image']; ?>" alt="service">
<h2><?php echo $row['title']; ?></h2>
<p><?php echo $row['description']; ?></p>
<!--<blockquote>-->
<!--<i class="icofont-quote-left"></i>-->
<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veiam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea codo consequat. Duis aute irure dolor.-->
<!--</blockquote>-->

</div>


</div>
</div>
<div class="col-lg-4">
<div class="widget-area">
<div class="search widget-item">

</div>
<div class="post widget-item">
<h3>Popular Post</h3>

    <?php
								$sql = "SELECT * FROM `services` limit 10";
								$result = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_assoc($result)) {
								?>
<div class="post-inner">
<ul class="align-items-center">
<li>
<img src="Uploads/services/<?php echo $row['image']; ?>" alt="service_details">
</li>
<li>
<h4>
<a href="service-details.php?url=<?php echo $row['url']; ?>"><?php echo $row['title']; ?>
											</a>
</h4>
<p>By - <a href="#">Admin</a></p>
</li>
</ul>
</div>
<?php } ?>

</div>


<!--<div class="instagram widget-item">-->
<!--<h3>Instagram post</h3>-->
<!--<div class="row m-0">-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram1.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram2.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram3.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram4.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram5.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-4 col-sm-3 col-lg-4 p-0">-->
<!--<div class="instagram-item">-->
<!--<img src="assets/img/blog/instagram6.jpg" alt="Instagram">-->
<!--<a href="#">-->
<!--<i class="icofont-instagram"></i>-->
<!--</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
</div>
</div>
</div>
</div>
</div>


<?php include('include/footer.php')?>

<?php include('include/foot.php')?>
</body>

</html>