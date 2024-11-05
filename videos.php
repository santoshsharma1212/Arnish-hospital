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

    <?php include('include/header.php')?>

    <div class="page-title-area title-bg-eleven">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Videos</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <span>videos</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="team-area ptb-100">
        <div class="container">
            <div class="row">
                <?php
                    $sql = "SELECT * FROM `videos`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-sm-12 col-md-6">
                  
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" width="100%" height="315" src="<?php echo $row['link']?>" allowfullscreen></iframe>
                        </div>
                   
                    </div>
                    <?php } ?>
            </div>
           
        </div>
    </section>

    <?php include('include/footer.php')?>


    <?php include('include/foot.php')?>
</body>

<!-- Mirrored from templates.hibootstrap.com/findo/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 10:51:42 GMT -->

</html>