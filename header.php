<?php $configs = include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?= $configs['name']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet"/>
    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet"/>

    <link rel="stylesheet" href="assets/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="index.php">Flat<span>Lab</span></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/index.php') ? 'class="active"' : ''; ?>><a
                            href="index.php">Home</a></li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/about.php') ? 'class="active"' : ''; ?>><a
                            href="about.php">About</a></li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/services.php') ? 'class="active"' : ''; ?>><a
                            href="services.php">Service</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                           data-close-others="false">Feature <b class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/typography.php') ? 'class="active"' : ''; ?>>
                                <a href="typography.php">Typography</a></li>
                            <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/button.php') ? 'class="active"' : ''; ?>>
                                <a href="button.php">Buttons</a></li>
                        </ul>
                    </li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/portfolio.php') ? 'class="active"' : ''; ?>><a
                            href="portfolio.php">Portfolio</a></li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/price.php') ? 'class="active"' : ''; ?>><a
                            href="price.php">Price</a></li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/blog.php') ? 'class="active"' : ''; ?>><a href="blog.php">Blog</a></li>
                    <li <?php echo ($_SERVER['SCRIPT_NAME'] == '/dmitry/contact.php') ? 'class="active"' : ''; ?>><a href="contact.php">Contact</a></li>
                    <li class="dropdown language">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" src="img/flags/us.png">
                            <span class="username">US</span>
                            <b class=" fa fa-angle-down"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img alt="" src="img/flags/es.png"> Spanish</a></li>
                            <li><a href="#"><img alt="" src="img/flags/de.png"> German</a></li>
                            <li><a href="#"><img alt="" src="img/flags/ru.png"> Russian</a></li>
                            <li><a href="#"><img alt="" src="img/flags/fr.png"> French</a></li>
                        </ul>
                    </li>
                    <li><input type="text" placeholder=" Search" class="form-control search"></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--header end-->
