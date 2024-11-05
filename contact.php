<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include('include/head.php') ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .appointment-form {
            margin: 50px;
        }

        .appointment-form label {
            display: block;
            margin-bottom: 5px;
        }

        .appointment-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .appointment-form button {
            padding: 10px 20px;
            background-color: #25D366;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .appointment-form button:hover {
            background-color: #128C7E;
        }

        .contact-area .contactForm {
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .contact-area .contactForm h2 {
            font-size: 25px;
            margin-bottom: 5px;
            margin-top: -5px;
        }

        .contact-area .contactForm p {
            margin-bottom: 30px;
        }

        .contact-area .contactForm .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .contact-area .contactForm .form-group label {
            margin-bottom: 0;
        }

        .contact-area .contactForm .form-group label i {
            position: absolute;
            top: 40px;
            left: 12px;
            display: inline-block;
            font-size: 17px;
            color: #ff6015;
        }

        .contact-area .contactForm .form-group .form-check {
            display: inline-block;
        }

        .contact-area .contactForm .form-group .form-control {
            height: 50px;
            border-radius: 5px;
            background-color: #f9f9f9;
            padding-left: 40px;
            font-size: 15px;
            border: 0;
        }

        .contact-area .contactForm .form-group .form-control:focus {
            border: 0;
            box-shadow: none;
        }

        .contact-area .contactForm .form-group textarea {
            height: auto !important;
            padding-top: 13px;
        }

        .contact-area .contactForm .form-group .list-unstyled {
            font-size: 15px;
            margin-top: 10px;
            color: #dc3545;
        }

        .contact-area .contactForm .common-btn {
            width: 100%;
            text-align: center;
            display: block;
            transition: .5s all ease;
            opacity: 1;
        }

        .contact-area .contactForm .text-danger {
            margin-bottom: 0;
            margin-top: 10px;
            font-size: 22px;
            color: #dc3545;
        }

        .contact-area .contactForm .text-success {
            margin-bottom: 0;
            margin-top: 10px;
            font-size: 22px;
            color: #28a745;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php include('include/header.php') ?>

    <!-- Page Title -->
    <div class="page-title-area title-bg-eight">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-item">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Info -->
    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info">
                        <i class="icofont-location-pin"></i>
                        <span>Location:</span>
                        <a href="#">Arnish Hospital, plot no.8 pocket 8, sector 19 Rohini On jail road Delhi 110085</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info">
                        <i class="icofont-ui-call"></i>
                        <span>Phone:</span>
                        <a href="tel:+9810155288">+9810155288</a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="contact-info">
                        <i class="icofont-ui-email"></i>
                        <span>Email:</span>
                        <a href="mailto:info@example.com">info@example.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-area pb-70">
        <div class="container">
            <form class="contactForm" action="contact.php" method="post">
                <h2>Let's connect...!</h2>
                <!--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, iusto possimus doloremque amet vitae facere blanditiis nulla explicabo obcaecati nihil ipsam deleniti nesciunt illo, non iure</p>-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="icofont-user-alt-3"></i></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="icofont-ui-email"></i></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="icofont-ui-call"></i></label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label><i class="icofont-ui-calendar"></i></label>
                            <input id="datetimepicker" type="text" name="time_slot" class="form-control" placeholder="Select appointment date" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><i class="icofont-comment"></i></label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write your message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="form-check agree-label">
                                <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                <label class="form-check-label" for="gridCheck">
                                    Accept <a href="about.php">Terms & Conditions</a> And <a href="about.php">Privacy Policy.</a>
                                </label>
                                <div class="help-block with-errors gridCheck-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" name="submit" class="btn common-btn">Send Message</button>
                    </div>
                </div>
            </form>
            <?php
            // Create connection

            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
                $time_slot = $_POST['time_slot'];

                $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `time_slot`) VALUES ('$name', '$email', '$phone', '$message', '$time_slot')";
                $result = mysqli_query($conn, $sql);
            }
            ?>

        </div>
    </div>

    <!-- Map Area -->
    <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.532357280155!2d77.13713807550451!3d28.73351847560981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d017968cf773d%3A0xfed038591a520b36!2sARNISH%20Multi-Specialty%20Hospital!5e0!3m2!1sen!2sin!4v1717134657851!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Footer -->
    <?php include('include/footer.php') ?>
    <?php include('include/foot.php') ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function() {
            $("#datetimepicker").flatpickr({
                enableTime: true,
                dateFormat: "d-m-Y H:i",
            });
        });
    </script>
</body>

</html>