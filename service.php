<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/findo/default/donations.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 10:51:43 GMT -->
<head>
    <?php include('include/head.php')?>
</head>
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

<div class="page-title-area title-bg-two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Departments</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>All Department</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="donations-area ptb-100">
    <div class="container">
        <style>
                            .service-title {
                                color: #ff6015 !important;
                                text-decoration: none;
                            }
                    
                            .service-title:hover {
                                color: #000 !important;
                            }
                    
                            .center-btn {
                                display: block;
                                margin: 0 auto;
                                padding-top: 15px;
                            }
                    
                            .btn-container {
                                display: flex;
                                justify-content: center;
                            }
                        </style>
        <div class="row">
            <?php
            $sql = "SELECT * FROM `services`";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="Uploads/services/<?php echo $row['image']; ?>" alt="services">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="service-details.php?url=<?php echo $row['url']; ?>" class="service-title"><?php echo $row['title']; ?></a>
                            </h3>
                            <p class="card-text" style="overflow: hidden;
                                                         display: -webkit-box;
                                                         -webkit-line-clamp: 3;
                                                         line-clamp: 3;
                                                         -webkit-box-orient: vertical;">
                                <?php echo $row['short_description']; ?>
                            </p>
    
                            <div class="btn-container">
                                <a class="btn common-btn center-btn" href="service-details.php?url=<?php echo $row['url']; ?>">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php include('include/footer.php')?>
<?php include('include/foot.php')?>

</body>
</html>
