<?php include('db_conn.php')?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/png-transparent-hiking-computer-icons-backpacking-hiking-icon-miscellaneous-hand-logo-thumbnail-121x121.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/add/css/add1.css"><link rel="stylesheet" href="assets/add/css/add1.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets\images\png-transparent-hiking-computer-icons-backpacking-hiking-icon-miscellaneous-hand-logo-thumbnail-121x121.png" alt="NepTravels logo" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="index.php">NepTravel</a></span>
            </div>
            <div class="Login" id="navbarSupportedContent">
			<form method="post" action="db_conn.php">
					<?php include('error.php');?>
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
					<li class="nav-item"><a class="nav-link link text-black text-primary display-4">
						<button type="submit" class="btn" name="login_page">Login</button>
					</a></li>
                    <li class="nav-item"><a class="nav-link link text-black text-primary display-4">
						<button type="submit" class="btn" name="signup_page">Sign up</button>
					</a></li></ul>
                
                
            </div>
        </div>
    </nav>

</section>

<section data-bs-version="5.1" class="header1 cid-t2uxAdP1Wk web-fullscreen" id="header1-l">

    

    <div class="overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);"></div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="web-section-title web-fonts-style mb-3 display-1"><strong>Welcome to NepTravels</strong></h1>
                
                <p class="web-text web-fonts-style display-7">Booking travels made just got easier<br></p>
                <div class="web-section-btn mt-3"><a class="btn btn-primary display-4" href="index.html">Book Now<br></a></div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header3 cid-t2uzRmkJhb web-fullscreen web-parallax-background" id="header3-n">

    

    <div class="overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);"></div>

    <div class="align-center container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-7">
                <h1 class="web-section-title web-fonts-style mb-3 display-1"><strong>Explore Nepal</strong></h1>
                
                <p class="web-text web-fonts-style display-7">Beautiful Places to visit.</p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-t2uAsivx6y" id="image1-o">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/chitwan1-972x624.jpg" alt="Wildlife image">
                    <p class="web-description web-fonts-style pt-2 align-center display-4"></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="web-section-title web-fonts-style mb-3 display-5">
                        <strong>Wildlife</strong></h3>
                    <p class="web-text web-fonts-style display-7">Wildlife tourism is a major source of tourism in the country.  Numerous national parks and reserves to explore and see.<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image2 cid-t2uAK2tFhQ" id="image2-p">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/804437-beautiful-nepal-wallpaper-2664x1776-for-iphone-6-1256x837.jpg" alt="Mountain Image">
                    <p class="web-description web-fonts-style mt-2 align-center display-4"></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="web-section-title web-fonts-style mb-3 display-5">
                        <strong>Mountains</strong></h3>
                    <p class="web-text web-fonts-style display-7">The superiority of the Himalayas' gigantic mountains fills the people with awe. Not only the nature but also the omnipresent spirituality captures your heart and gives Nepal a mysterious atmosphere.<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="image1 cid-t2uAKGmMn7" id="image1-q">
    

    

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="assets/images/gosaikunda-lake-in-nepal-1256x727.jpg" alt="Lake image">
                    <p class="web-description web-fonts-style pt-2 align-center display-4"></p>
                </div>
            </div>
            <div class="col-12 col-lg">
                <div class="text-wrapper">
                    <h3 class="web-section-title web-fonts-style mb-3 display-5"><strong>Lakes</strong><strong><br></strong></h3>
                    <p class="web-text web-fonts-style display-7">Nepal with huge natural beauty possesses some of the most beautiful lakes where numberless options to visit and travel. <br>Nepal is god-gifted land with a large number of lakes that take everyone’s breath away.&nbsp;<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts1 cid-t2uAZDgHPF" id="contacts1-r">

    

    
    <div class="container">
        <div class="web-section-head">
            <h3 class="web-section-title web-fonts-style align-center mb-0 display-2">
                <strong>Contact us</strong></h3>
            <h4 class="web-section-subtitle web-fonts-style align-center mb-0 mt-2 display-5"></h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="web-iconfont web-mbri-letter web-mbri"></span>
                        </div>
                        <h4 class="card-title web-fonts-style mb-2 display-2">
                            <strong>Email</strong><strong><br></strong>
                        </h4>
                        <p class="web-text web-fonts-style mb-2 display-4">
                            We will reply as soon as possible</p>
                        <h5 class="link web-fonts-style display-7">[Project manager Email]</h5>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div class="image-wrapper">
                            <span class="web-iconfont web-mbri-mobile-2 web-mbri"></span>
                        </div>
                        <h4 class="card-title web-fonts-style align-center mb-2 display-2">
                            <strong>Phone</strong>
                        </h4>
                        <p class="web-text web-fonts-style mb-2 display-4">Project manager Number</p>
                        <h5 class="link web-black web-fonts-style display-7"></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
  
  
</body>
</html>