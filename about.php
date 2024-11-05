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
    <div class="page-title-area title-bg-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>About</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>About</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about-main1.jpg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About us</span>
                            <h2>Welcome to Arnish Hospital</h2>
                        </div>
                        <span class="about-span">where your health and well-being are our top priorities. Our hospital is dedicated to providing comprehensive and compassionate healthcare services to our community.</span>
                        <p>At Arnish Hospital, our team of highly skilled doctors, nurses, and healthcare professionals work collaboratively to ensure each patient receives personalized and holistic care. We are equipped with the latest medical technology and modern facilities, enabling us to offer a wide range of services, from routine check-ups to complex surgical procedures.</p>
                        <p>We pride ourselves on our patient-first approach, understanding that each individual has unique needs. Our multidisciplinary teams are committed to creating a warm and welcoming environment, where patients feel supported and valued.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
     <section class="donations-area three pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Commitment to Quality</span>
                <h2>Services</h2>
                <p> Working together with community stakeholders to create lasting health improvements and positive outcomes</p>
            </div>
            <div class="row">
                <?php


                $sql = "SELECT * FROM `services` limit 6";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <div class="col-sm-6 col-lg-4">
                        <div class="donation-item">
                            <div class="img">
                                <img class="img-fluid" src="Uploads/services/<?php echo $row['image']; ?>" alt="services">

                            </div>
                            <div class="top">
                                <!-- <a class="tags" href="#">#Medical</a> -->
                                <h3>
                                    <a href="service-details.php?url=<?php echo $row['url']; ?>"><?php echo $row['title']; ?></a>
                                </h3>
                                <p><?php echo $row['short_description']; ?></p>
                            </div>
                            <a class="common-btn" href="service-details.php?url=<?php echo $row['url']; ?>">Know More</a>
                           
                           


                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </section>


    <!--<section class="dream-area pt-100 pb-70">-->
    <!--    <div class="container">-->
    <!--        <div class="section-title">-->
    <!--            <span class="sub-title">Fulfill our dream</span>-->
    <!--            <h2>Let's make a change</h2>-->
    <!--            <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>-->
    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">Over 20M+ people around the world is having good life because of Findo</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*50</span>country served world wide</h4>-->
    <!--                    <span class="sub-span">01</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">We are supporting the poor and homeless people by providing food</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*Food</span>served world wide</h4>-->
    <!--                    <span class="sub-span">02</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">First time a non- profitable organization is fighting against the poverty</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*Finance</span>collecting & donating</h4>-->
    <!--                    <span class="sub-span">03</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">Over 1200+ volunteer working for Findo around the world</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*Volunteer</span>in every Country</h4>-->
    <!--                    <span class="sub-span">04</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">Hands move to support in Yemen combat covid-19 by donating face masks</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*Lockdown</span>covid-19 helping</h4>-->
    <!--                    <span class="sub-span">05</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6 col-lg-4">-->
    <!--                <div class="dream-item">-->
    <!--                    <h3>-->
    <!--                        <a href="donations.html">This project seeks to build houses for reduce their suffering allow them to live</a>-->
    <!--                    </h3>-->
    <!--                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots.</p>-->
    <!--                    <h4><span>*150</span>house project</h4>-->
    <!--                    <span class="sub-span">06</span>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <!--<div class="benefit-area two pt-100 pb-70">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="benefit-img">-->
    <!--                    <img src="assets/img/benefit-main1.jpg" alt="Benefit">-->
    <!--                    <img src="assets/img/benefit-shape1.png" alt="Benefit">-->
    <!--                    <div class="video-wrap">-->
    <!--                        <button class="js-modal-btn" data-video-id="uemObN8_dcw">-->
    <!--                            <i class="icofont-ui-play"></i>-->
    <!--                        </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6">-->
    <!--                <div class="section-title">-->
    <!--                    <span class="sub-title">Core features</span>-->
    <!--                    <h2>Mission to make a smile</h2>-->
    <!--                    <p>We exist for non-profits, social enterprises, community groups, activists,lorem politicians and individual citizens that are making.</p>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-sm-6 col-sm-6">-->
    <!--                        <div class="benefit-item">-->
    <!--                            <i class="flaticon-house"></i>-->
    <!--                            <h3>Build home</h3>-->
    <!--                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-sm-6">-->
    <!--                        <div class="benefit-item two">-->
    <!--                            <i class="flaticon-hospital"></i>-->
    <!--                            <h3>Medical facilities</h3>-->
    <!--                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-sm-6">-->
    <!--                        <div class="benefit-item three">-->
    <!--                            <i class="flaticon-fast-food"></i>-->
    <!--                            <h3>Food & water</h3>-->
    <!--                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-sm-6 col-sm-6">-->
    <!--                        <div class="benefit-item four">-->
    <!--                            <i class="flaticon-graduation-cap"></i>-->
    <!--                            <h3>Education facilities</h3>-->
    <!--                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique illum excepturi</p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->



    <?php include('include/footer.php')?>
   

    <?php include('include/foot.php')?>
</body>


</html>