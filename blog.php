<?php
    session_start();
    if (!isset($_SESSION['auth'])) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Blog | Agency Perfect</title>

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

    <header id="masthead" class="site-header site-header-white">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a href="index.html" class="site-title"><span>Agency</span>Perfect</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="index.php">Home</a></li>
                        <?php 
                        if (isset($_SESSION['auth'])) {
                            ?>
                            <li ><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li>
                                <form action="code.php" method="post">
                                    <button type="submit" class="btn" name="logout">Logout</button>
                                </form>
                            </li>              
                        <?php
                        }else{
                            ?>
                            <li ><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->




<div id="hero" class="hero overlay subpage-hero blog-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Blog</h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <article class="blog-post">
                            <a href="blog-post.html">
                                <img src="assets/img/portfolio-1.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.html">12 Essential Free Sketch Plugins</a></h3>
                                <p>Sketch Measure helps designers organize and outline their work for developers, project managers, and other team members</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.html">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author.jpg" alt="">John Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>September 21, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Design</a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <a href="blog-post.html">
                                <img src="assets/img/portfolio-2.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.html">Customize WordPress Themes Easily</a></h3>
                                <p>This guide is intended for those with some knowledge of HTML and CSS, but aren’t too familiar with the way WordPress themes work. If you don’t know much about web design but you are interested, that’s good too. We’ll explain everything each step of the way.</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.html">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author-3.jpg" alt="">Marc Jones</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>August 25, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>Web Development</a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->
                        <article class="blog-post">
                            <a href="blog-post.html">
                                <img src="assets/img/portfolio-3.jpg" class="img-res" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="post-title"><a href="blog-post.html">Creative Website Template PSD</a></h3>
                                <p>Free PSD web templates can be found everywhere on the internet. Most of them are ugly, some of them look nice, but rarely will you find anything great. Since Adobe Photoshop is one of those „easy to use – hard to master“ programs, many beginners and professionals decide to use PSD templates for their first website.</p>
                                <div class="text-right">
                                    <a class="read-more" href="blog-post.html">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-author">
                                        <a href="#"><img class="img-res" src="assets/img/author-2.jpg" alt="">Linda Smith</a>
                                    </span>
                                    <span class="post-date">
                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>July 11, 2016</a>
                                        </span>
                                    <span class="post-category">
                                        <a href=""><i class="fa fa-folder" aria-hidden="true"></i>PSD Template</a>
                                    </span>
                                </div><!-- /.post-meta -->
                            </div><!-- /.post-content -->
                        </article><!-- /.blog-post -->

                        <div class="ui-pagination mt-50">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <ul class="pagination">
                                        <li><a href="#">&lt;&lt;</a></li>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">31</a></li>
                                        <li class="active"><a href="#">32</a></li>
                                        <li><a href="#">33</a></li>
                                        <li class="more"><a href="#">...</a></li>
                                        <li><a href="#">&gt;</a></li>
                                        <li><a href="#">&gt;&gt;</a></li>
                                    </ul><!-- /.pagination -->               
                                </div>
                            </div>
                        </div><!-- /.ui-pagination -->
                    </div>
                    <aside class="col-md-4">
                        <div class="sidebar">
                            <div class="widget search-form">
                                <h4 class="widget-title">Search the blog</h4>
                                <form class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" required>
                                    <button class="btn btn-green" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div><!-- /.search-form -->
                            <div class="widget widget-recent-posts">
                                <h4 class="widget-title">Recent posts</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Inside The Lipsum</a></li>
                                    <li><a href="#">Oscar Wilde</a></li>
                                    <li><a href="#">Jeffrey Ween</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-recent-posts -->
                            <div class="widget widget-categories">
                                <h4 class="widget-title">Categories</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Inside The Lipsum <span>12</span></a></li>
                                    <li><a href="#">Oscar Wilde<span>4</span></a></li>
                                    <li><a href="#">Jeffrey Ween<span>2</span></a></li>
                                    <li><a href="#">Responsive Design<span>1</span></a></li>
                                    <li><a href="#">Development<span>9</span></a></li>
                                </ul>
                            </div><!-- /.widget-categories -->
                            <div class="widget widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">PSD Template</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div><!-- /.widget-tags -->
                        </div><!-- /.sidebar -->
                    </aside>
                </div>
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
<?php
include('includes/footer.php');
?>