<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VananeBiznet</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="images/logo/logo1.png">
</head>

<body>

    <!-- Header Design -->
    <header class="header" id="header">
        <a href="#" class="logo">
            <h1 id="vanane">Vanane<span id="biznet">Biznet</span></h1>
        </a>

        <div class="menu">
            <i class="bi bi-menu-button-wide"></i>
        </div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#work">Work</a>
            <a href="#contact">Contact</a>

            <span class="active-nav"></span>
        </nav>
    </header>
    <!-- Header Design -->

    <!-- Hero Section -->
    <section class="home" id="home">
        <div class="home-content">
            <h1>Part Time Solution</h1>
            <div class="text-animate">
                <h3>Type And Translate</h3>
            </div>
            <p>Discover flexible part-time opportunities in typing and translation.
                Work on your schedule, earn from your skills, and connect with global clients.
                Perfect for freelancers, students, or anyone seeking remote work from anywhere.
            </p>

            <div class="btn-box">
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Join Us</a>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Login</a>
            </div>
        </div>
        <div class="home-sci">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
        </div>
        <div class="home-imgHover"></div>
    </section>
    <!-- Hero Section -->

    <!-- About Section -->
    <section class="about" id="about">
        <h2 class="heading">About <span>Us</span></h2>
        <div class="about-img">
            <img src="images/logo/logo.jpg" alt="">
            <span class="circle-spin"></span>
        </div>
        <div class="about-content">
            <h3>How It Works !</h3>
            <p>
                Our platform connects skilled individuals with part-time typing and translation opportunities,
                empowering freelancers, students, and remote workers to earn flexibly while showcasing their expertise.
                Prioritizing convenience and reliability, we provide a seamless experience for part-timers to collaborate efficiently,
                fostering professional growth and enabling them to achieve their goals with ease...
            </p>
            <div class="btn-box btns">
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <!-- Work Section -->
    <section class="work" id="work">
        <h2 class="heading">Start <span>Working</span></h2>

        <div class="work-row">
            <div class="work-column">
                <h3 class="title">Typing</h3>

                <div class="work-box">
                    <div class="work-content">
                        <div class="content">
                            <div class="work-qty"><i class="bi bi-keyboard"></i> Remaining Tasks - 10</div>
                            <h3>Typing - Sinhala</h3>
                            <p>Typing Sinhala jobs involve using a Sinhala keyboard or software to type content.
                                You can select tasks based on your preferred time duration and submit the completed work for payment.</p>
                        </div>
                    </div>

                    <div class="work-content">
                        <div class="content">
                            <div class="work-qty"><i class="bi bi-keyboard"></i> Remaining Tasks - 10</div>
                            <h3>Typing - English</h3>
                            <p>Typing English jobs involve using a English keyboard or software to type content.
                                You can select tasks based on your preferred time duration and submit the completed work for payment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-column">
                <h3 class="title">Translation</h3>

                <div class="work-box">
                    <div class="work-content">
                        <div class="content">
                            <div class="work-qty"><i class="bi bi-translate"></i> Remaining Tasks - 10</div>
                            <h3>Translate - Sinhala To English</h3>
                            <p>Sinhala to English translation involves converting Sinhala text into accurate English.
                                Select tasks, set your time duration, and submit completed work.
                                After submission, you’ll receive payment.</p>
                        </div>
                    </div>

                    <div class="work-content">
                        <div class="content">
                            <div class="work-qty"><i class="bi bi-translate"></i> Remaining Tasks - 10</div>
                            <h3>Translate - English To Sinhala</h3>
                            <p>English to Sinhala translation involves converting English text into Sinhala.
                                Choose tasks, set your time duration, and submit completed work.
                                After submission, you’ll receive payment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section -->

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Us!</span></h2>

        <form action="#">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Email Address" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="tel" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Subject" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>
    <!-- Contact Section -->

    <!-- Footer -->
    <footer>
        <div class="footer-container">

            <!-- Footer Left Section -->
            <div class="footer-left">
                <h2>Vanane<span>Biznet</span></h2>
                <p>
                    Empowering businesses through innovative digital solutions.
                    Explore, connect, and grow with us.
                </p>
            </div>

            <!-- Footer Center Section -->
            <div class="footer-center">
                <h4>Connect With Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-whatsapp"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-tiktok"></i></a>
                </div>
                <p><i class="bi bi-telephone-fill"></i><a href="#"> +94 783 931 221</a></p>
                <p><i class="bi bi-envelope-at-fill"></i><a href="mailto:support@vananebiznet.com"> support@vananebiznet.com</a></p>
            </div>

            <div class="footer-right">
                <div class="footer-icon">
                    <a href="#"><i class="bi bi-arrow-up"></i></a>
                </div>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>Copyright &copy; 2025 by MoonForge || All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Footer -->

    <!-- Join Us -->
    <div class="signIn_Box">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- joinUs -->
                    <div class="form_container" id="sign_up">
                        <i class="form-close btn-close form_close" data-bs-dismiss="modal" aria-label="Close" onclick="rsign_in();"></i>
                        <div class="form login-form">
                            <form action="#">
                                <h2>Create an account</h2>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 col-md-6">
                                            <div class="inputBox">
                                                <input type="text" placeholder="First Name" id="fname" />
                                                <i class="bi bi-person email"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12 col-md-6">
                                            <div class="inputBox">
                                                <input type="text" placeholder="Last Name" id="lname" />
                                                <i class="bi bi-person email"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputBox">
                                                <input type="email" placeholder="Email" id="email" />
                                                <i class="bi bi-envelope email"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputBox">
                                                <input type="password" placeholder="Password" id="password" />
                                                <i class="bi bi-person-lock password"></i>
                                                <i class="bi bi-eye-slash eye" id="pwi1" onclick="showPassword();"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="inputBox">
                                                <input type="text" placeholder="Mobile" id="mobile" />
                                                <i class="bi bi-phone email"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="inputBox">
                                                <select class="form-select" id="gender">

                                                <?php
                                                $rs = Database::search("SELECT * FROM `gender`");
                                                $num = $rs->num_rows;

                                                for ($x=0; $x < $num; $x++) { 
                                                    $data = $rs->fetch_assoc();
                                                    ?>
                                                     <option value="<?php echo $data["gender_id"]; ?>">
                                                        <?php echo $data["gender_name"]; ?>
                                                    </option>
                                                    <?php

                                                }

                                                ?>
                                                    <!-- <i class="bi bi-envelope email"></i> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary signin-bt" onclick="signUp();">Join Us</button>
                                    <div class="divider">
                                        <span>OR login with social platforms</span>
                                    </div>
                                    <div class="social-i text-center">
                                        <a href="#"><i class="bi bi-google"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-apple"></i></a>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <!-- joinUs -->

                </div>
            </div>
        </div>
        <!-- modal -->
    </div>
    <!-- Join Us -->

    <!-- Login -->
    <div class="signIn_Box">
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- SignIn Box -->
                    <div class="form_container" id="sign_in">
                        <i class="form-close btn-close form_close" data-bs-dismiss="modal" aria-label="Close"></i>
                        <div class="form login-form ">
                            <form action="#">
                                <h2>Welcome back</h2>

                                <?php

                                $email = "";
                                $password = "";

                                if (isset($_COOKIE["email"])) {
                                    $email = $_COOKIE["email"];
                                }
                                if (isset($_COOKIE["password"])) {
                                    $password = $_COOKIE["password"];
                                }

                                ?>

                                <div class="inputBox">
                                    <input value="<?php echo $email; ?>" type="email" placeholder="Enter Your Email" id="email2" />
                                    <i class="bi bi-envelope email"></i>
                                </div>
                                <div class="inputBox">
                                    <input value="<?php echo $password; ?>" type="password" placeholder="Enter Your password" id="password2" />
                                    <i class="bi bi-person-lock password"></i>
                                    <i class="bi bi-eye-slash eye"  id="pwi" onclick="showPassword1();"></i>
                                </div>
                                <div class="option-field">
                                    <span class="checkbox">
                                        <input type="checkbox" class="form-check-input" id="check">
                                        <label for="check">Remember Me</label>
                                    </span>
                                    <a href="#" class="Forgot-pw" onclick="forgotPassword();">Forgot Password?</a>
                                </div>
                                <button type="button" class="btn btn-primary signin-bt" onclick="signIn();">Login</button>
                                <div class="divider">
                                    <span>OR login with social platforms</span>
                                </div>
                                <div class="social-i text-center">
                                    <a href="#"><i class="bi bi-google"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-apple"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SignIn Box -->

                </div>
            </div>
        </div>
        <!-- modal -->
    </div>
    <!-- Login -->



    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>