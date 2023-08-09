<?php include("includes/header.php"); ?>

<body>

    <!-- Header -->
    <header class="header fixed-top" id="header">
        <img src="assets/images/Favicon_5.png" alt="ThinkerVilleLogo" srcset="" style="width:50px; height: 50px;">
        <a href="#" class="navbar-brand" style="margin-left: -18%">ThinkerVille</a>
        <div class="menu-btn"><i class="burger fa-solid fa-bars"></i></div>
        <div class="navigation">
            <div class="navigation-items">
                <a class="nav-a" href="#home">Home</a>
                <a class="nav-a" href="levelselection.php">Take a Quiz</a>
                <a class="nav-a" href="#about">About</a>
                <a class="nav-a" href="#contact">Contact Us</a>
            </div>
        </div>
    </header>
    <!--End Header-->

    <!-- Home -->
    <section class="home" id="home" style="background-image: url('assets/images/TV_Background.png'); background-size: 100% 100%; background-repeat:no-repeat">
        <div class="content">
            <h2>Take A Quiz with</h2>
            <img src="assets/images/ThinkerVille_04.png" alt="ThinkerVille" srcset="" style="width:550px; height: 100px;">
            <p style="width: 80%" class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="#about">Take a Quiz</a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </section>
    <!-- End Home-->

    <!-- About -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End About -->

    <!-- Assesment -->
    <section id="assesment">

    </section>
    <!-- End Assesment -->

    <!-- Contact Us -->
    <section id="contact">
        <div class="row">
            <div class="col-md-6">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <center>
                            <i class="fa-solid fa-envelope contact-icon"></i>
                            <h5 class="fw-bolder text-white">Email</h6>
                                <p class="fw-light contact-text">ThinkerVille@gmail.com</p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <i class="fa-solid fa-mobile contact-icon" aria-hidden="true"></i>
                            <h5 class="fw-bolder text-white">Mobile</h6>
                                <p class="fw-light contact-text">0909099989</p>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <i class="fa-solid fa-location-dot contact-icon"></i>
                            <h5 class="fw-bolder text-white">Address</h6>
                                <p class="fw-lighter contact-text">Tacloban</p>
                        </center>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125215.83383223036!2d124.96398929999998!3d11.2617915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33087727ff2f99dd%3A0xc3fb64480f0c8751!2sTacloban%20City%2C%20Leyte!5e0!3m2!1sen!2sph!4v1691277216364!5m2!1sen!2sph" width="500" height="500" style="border-radius: 25px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="responsive-iframe"></iframe>
            </div>
            <div class="col-md-6 p-4">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="p-1"><i class="fa-solid fa-message"></i>&nbsp;Message Us</h5>
                        <hr>
                        <form class="row g-4 p-2 mb-3">
                            <div class="col-md-6">
                                <label for="inputFullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputFulName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-warning btn-lg text-white"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End Contact Us-->


    <footer class="container-fluid" id="thinkerFooter">
        <p class="text-center fw-lighter">&copy <?= date('Y') ?> Copyright - Thinker Ville</p>
    </footer>

    <?php include("includes/footer.php"); ?>