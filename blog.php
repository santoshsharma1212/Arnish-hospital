<!DOCTYPE html>
<html lang="zxx">

<?php include('include/head.php') ?>

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

    <?php include('include/header.php') ?>

    <div class="page-title-area title-bg-six">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Blog</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <span>Blog</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-area three ptb-100">
        <div class="container">
            <div class="row">
                <?php
					$sql = "SELECT * FROM `blogs`";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {
					?>
                <div class="col-sm-6 col-lg-4">
                    <div class="blog-item">
                        <div class="top">
                            <a href="blog-details.php">
                                <img src="Uploads/blogs/<?php echo $row['image']; ?>" alt="Blog">
                            </a>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                   <span><?php $format = strtotime($row['createdAt']);
											echo date('d M,Y', $format); ?>
									
									</span>
                                </li>
                               
                            </ul>
                            <h3>
                              <a href="blog-details.php?blog_url=<?php echo $row['blog_url'] ?>"><?php echo $row['title']; ?></a>
                            </h3>
                             <p style="overflow: hidden;
                                display: -webkit-box;
                                -webkit-line-clamp: 3;
                                line-clamp: 3;
                                -webkit-box-orient: vertical;
                            "><?php echo $row['short_description']; ?></p>
                            <a class="blog-btn" href="blog-details.php?blog_url=<?php echo $row['blog_url']; ?>">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
					}
					?>
            
            </div>
          
        </div>
    </section>

    <?php include('include/footer.php') ?>


    <?php include('include/foot.php') ?>
</body>

<!-- Mirrored from templates.hibootstrap.com/findo/default/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 10:51:54 GMT -->

</html>