<!DOCTYPE html>
<html lang="zxx">

<?php include('include/head.php'); ?>

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

    <?php include('include/header.php'); ?>

    <div class="page-title-area title-bg-seven">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Blog Details</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Blog Details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <?php
                if (isset($_GET['blog_url'])) {
                    $blog_url = $_GET['blog_url'];

                    // Ensure you have a database connection established
                    include('include/db_connection.php');

                    // Prevent SQL injection
                    $blog_url = mysqli_real_escape_string($conn, $blog_url);

                    $sql = "SELECT * FROM `blogs` WHERE `blog_url` = '$blog_url'";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    } else {
                        echo "Blog not found.";
                        exit;
                    }
                } else {
                    echo "Invalid blog URL.";
                    exit;
                }
                ?>
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <img src="Uploads/blogs/<?php echo htmlspecialchars($row['image']); ?>" alt="blog Details">
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    <?php $format = strtotime($row['createdAt']);
                                    echo date('M d, Y', $format); ?>
                                </li>
                            </ul>
                            <h2><?php echo $row['title']; ?></h2>
                            <p><?php echo $row['description']; ?></p>
                            <blockquote>
                                <i class="icofont-quote-left"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="post widget-item">
                            <h3>Popular Post</h3>
                            <?php
                            $sql = "SELECT * FROM `blogs` LIMIT 10";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <div class="post-inner">
                                    <ul class="align-items-center">
                                        <li>
                                            <img src="Uploads/blogs/<?php echo htmlspecialchars($row['image']); ?>" alt="Details">
                                        </li>
                                        <li>
                                            <h4>
                                                <a href="blog-details.php?blog_url=<?php echo urlencode($row['blog_url']); ?>"><?php echo htmlspecialchars($row['title']); ?></a>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>
    <?php include('include/foot.php'); ?>
</body>
</html>
