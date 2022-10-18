<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Agency Perfect</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>Agency</span>Perfect</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="active"><a href="index.php" data-toggle="dropdown">Home</a></li>
                        <?php
                        session_start();
                        if (isset($_SESSION['auth'])) {
                            ?>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>                            
                            <li>
                                <form action="code.php" method="post">
                                    <button type="submit" class="btn" name="logout">Logout</button>
                                </form>
                            </li>                            
                            <?php
                        }else{
                            ?>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Your story begins from here.</h1>
                <p>Your clients on the internet. Learn how to receive them.</p>
                <a href="#" class="btn btn-border">Learn more</a>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Responsive web design</h2>
                        <p>Responsive Web design is the approach that suggests that design and development should respond to the user's behavior and environment based on screen size, platform and orientation. The practice consists of a mix of flexible grids and layouts, images and an intelligent use of CSS media queries</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="assets/img/ipad-pro.png" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->

        <section class="site-section section-services gray-bg text-center">
            <div class="container">
                <h2 class="heading-separator">Our Services</h2>
                <p class="subheading-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/anchor.svg" alt="">
                            <h3 class="service-title">Branding</h3>
                            <p class="service-info"> Learn why your brand is a valuable component when it comes to your marketing communication and why you don't want to be without one.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/bycicle.svg" alt="">
                            <h3 class="service-title">Design</h3>
                            <p class="service-info">The strength of a design lies as much in the steps taken to create it as in the final result. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/paper-plane.svg" alt="">
                            <h3 class="service-title">Development</h3>
                            <p class="service-info">Development is a way to make people aware of the services and/or products you are offering.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/photo.svg" alt="">
                            <h3 class="service-title">Photography</h3>
                            <p class="service-info">Photographs are the legacy you leave for generations to come.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/microphone.svg" alt="">
                            <h3 class="service-title">Support</h3>
                            <p class="service-info">A support network can include a variety of forms of interaction with a range of people who can support you in different ways. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/rocket.svg" alt="">
                            <h3 class="service-title">Marketing</h3>
                            <p class="service-info">Marketing is of vital importance to any business. It is the key process of researching, promoting and selling products or services to your target.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/basket.svg" alt="">
                            <h3 class="service-title">Ecommerce</h3>
                            <p class="service-info">When customers are deciding on a purchase, they start by looking online.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="assets/img/chemestry.svg" alt="">
                            <h3 class="service-title">Coding</h3>
                            <p class="service-info">We use the best coding practices</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-services -->

        <section class="site-section section-map-feature text-center">

            <div class="container">
                <h2>Responsive Web Design</h2>
                <p>Web design is responsive design. Responsive web design is web design, done right.</p>
                <a href="#" class="btn btn-fill">Learn More</a>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="377" data-speed="2000">0</p>
                            <h3>Cofee Cups</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="1204" data-speed="2000">0</p>       
                            <h3>Projects completed</h3>
                        </div> <!-- /.counter-item -->      
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="459" data-speed="1000">0</p>
                            <h3>Happy Clients</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="675" data-speed="1000">0</p>
                            <h3>Average Deal</h3>
                        </div><!-- /.counter-item -->
                    </div>
                </div>
            </div>
            
        </section><!-- /.section-map-feature -->

        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">Latest Work</h2>
                    <p class="subheading-text">This is some of our best work</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-2.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-3.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-4.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-5.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-6.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="portfolio-item">
                            <img src="assets/img/portfolio-2.jpg" class="img-res" alt="">
                            <h4 class="portfolio-item-title">Portfolio item</h4>
                            <a href="portfolio-item.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div><!-- /.portfolio-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

        <section class="site-section section-newsletter text-center">
            <div class="container">
                <h2>Subscribe our newsletters</h2>
                <form class="form-group newsletter-group">
                    <input type="email" class="form-control" placeholder="Your e-mail" required>
                    <button class="btn btn-green" type="button">Subscribe</button>
                </form><!-- /.newsletter-group -->
            </div>
        </section><!-- /.section-newsletter -->

    </main><!-- /#main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <a class="site-title"><span>Agency</span>Perfect</a>
                    <p>We're a digital agency focused on creative and results-driven solutions.</p>
                    <p>We measure our success by the results we drive for our clients.</p>
                </div>
                <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                    <h3>Keep in touch</h3>
                    <ul class="list-unstyled contact-links">
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@agencyperfect.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+37400800000">+374 (00) 80 00 00 </a></li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i><a href="+37400900000">+374 (00) 90 00 00</a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>20 Leo, Armenia</p></li>
                    </ul>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                    <h3>Featured links</h3>
                    <ul class="list-unstyled">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="portfolio.html">Porfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="social-links">
                            <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                        </div><!-- /.social-links -->
                    </div>
                    <div class="col-xs-4">
                        <div class="text-right">
                            <p>&copy; AgencyPerfect</p>
                            <p>All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.copyright -->
    </footer><!-- /#footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/jquery.countTo.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/script.js"></script>
  
</body>
</html>