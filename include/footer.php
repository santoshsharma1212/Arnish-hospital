<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    /* Styling the WhatsApp button */
    .whatsapp-button {
        position: fixed;
        right: 7px;
        /* Distance from the right side */
        bottom: 73px;
        /* Distance from the bottom */
        background-color: #25D366;
        /* WhatsApp green background */
        padding: 15px;
        /* Padding around the button */
        border-radius: 50%;
        /* Make the button circular */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: Add shadow for depth */
        transition: background-color 0.3s;
        /* Smooth transition on hover */
        z-index: 999;
    }

    /* Styling the link and icon inside the button */
    .whatsapp-button a {
        color: white;
        /* White color for the icon */
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        /* Remove underline */
        font-size: 24px;
        /* Adjust the size of the icon */
    }

    /* Hover effect */
    .whatsapp-button a:hover {
        background-color: #128C7E;
        /* Darker green on hover */
    }
</style>
<div id="whatsapp-button" class="whatsapp-button">
    <a href="https://wa.me/+9810155288" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.php">
                            <img src="assets/img/logo1.png" alt="Logo">
                        </a>
                        <p>At Arnish Hospital, our team of highly skilled doctors, nurses, and healthcare professionals work collaboratively to ensure each patient receives personalized and holistic care. </p>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61559560915375 " target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/arnish-multi-specialty-hospital/" target="_blank">
                                    <i class="icofont-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/arnish_hospital/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-causes">
                        <h3>Urgent causes</h3>
                                  <?php
                $sql = "SELECT * FROM `services` LIMIT 2";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="cause-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="Uploads/services/<?php echo $row['image']; ?>" alt="Cause">
                                </li>
                                <li>
                                    <h3>
                                        <a href="service-details.php?url=<?php echo $row['url'] ?>"><?php echo $row['title']; ?></a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                          <?php } ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="about.php">
                                    <i class="icofont-simple-right"></i>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="blog.php">
                                    <i class="icofont-simple-right"></i>
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="service.php">
                                    <i class="icofont-simple-right"></i>
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    <i class="icofont-simple-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact info</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#"> Arnish Hospital,plot no.8 pocket 8, sector 19 Rohini On jail road Delhi 110085</a>
                                </li>
                                <li>
                                    <i class="icofont-ui-call"></i>
                                    <a href="tel:+123456789"> +9810155288</a>
                                </li>
                            </ul>
                        </div>
                        <!--<div class="contact-inner">-->
                        <!--    <ul>-->
                        <!--        <li>-->
                        <!--            <i class="icofont-location-pin"></i>-->
                        <!--            <a href="#">6A, New street, Spain</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <i class="icofont-ui-call"></i>-->
                        <!--            <a href="tel:+548658956">+548-658-956</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @<script>
                    document.write(new Date().getFullYear())
                </script>Designed By <a href="https://digidotes.com/" target="_blank">Digi Dotes</a></p>
        </div>
    </div>
</footer>

<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>