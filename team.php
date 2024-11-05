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
                        <h2>Team</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Team</span>
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
                $sql = " SELECT * FROM `doctors`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-6 col-lg-4">
                    <div class="team-item">
                        <div class="top">
                            <img src="Uploads/doctors/<?php echo $row['image']?>" alt="Team">
                            
                        </div>
                        <h3><?php echo $row ['title']?></h3>
                        <span style="color: #ff6015;"><?php echo $row ['department']?></span>
                       <p><?php echo $row ['short_description']?></p>
                    </div>
                </div>
                <?php } ?>
               
            </div>
           
        </div>
    </section>

    <?php include('include/footer.php')?>


    <?php include('include/foot.php')?>
</body>



</html>