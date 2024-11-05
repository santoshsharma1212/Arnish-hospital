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

    <div class="page-title-area title-bg-nine">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Gallery</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Gallery</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="row">
            <?php
                $sql = " SELECT * FROM `photos`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="gallery-item">
                        <a href="Uploads/photos/<?php echo $row['image']?>" data-lightbox="roadtrip">
                            <img src="Uploads/photos/<?php echo $row['image']?>" alt="Gallery">
                            <i class="icofont-eye"></i>
                        </a>
                    </div>
                </div>
                <?php
			}
			?>
               
            </div>
           
        </div>
    </div>

    <?php include('include/footer.php'); ?>



    <?php include('include/foot.php'); ?>
</body>

<!-- Mirrored from templates.hibootstrap.com/findo/default/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2024 10:51:40 GMT -->

</html>