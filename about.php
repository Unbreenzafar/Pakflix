<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width initial-scale=1.0">
<meta name="keywords" content="html,css,javascript,xml">
<meta name="discription" content="Pakflix films">
<meta name="author" content="Unbreen zafar, Aazka iqbal,Saman khan,Mayeda meraj,Adina mudassar,shams uz zaman">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div id="wrapper">
    <!--<div id="header">
        <header class="header">
             NavBar Area
            <nav class="navbar navbar-expand-md navbar-dark bg-warning navbar-fixed-top websiteheader"  >
                <div>
                    <img src="image/pakflix1.png" alt="logo" style="width: 75px;height:75px">
                </div>
                <span class=" navbar-text navbar-left d-inline websiteheader2 ">
          <a class="websitename" href="Index.html" style="color: brown"> PakFlix </a>
        </span>
                <button class="navbar-toggler navbar-right navbarbutton" type="button" data-toggle="collapse" data-target="#collapse_target" >
                    <span class="sr-only">Togggle navigation</span>
                    <div  class="fa fa-align-justify fa-2x nav navbar-right navigationicon"></div>
                </button>
                <div class=" collapse navbar-collapse" id="collapse_target">
                    <ul class= "nav navbar-nav navbar-right navbarcolumn" >

                        <li ><a href="index.html" class="fa fa-sign-in-alt" > Home</a></li>
                        <li></i> <a href="about.php" class="fa fa-user"> About</a></li>
                        <li><a href="#" class="fa fa-envelope"> Contact</a></li>
                        <li><a href="registration.html" class="fa fa-sign-in-alt" > Register</a></li>
                        <li >
                            <a href="login.html" class="fa fa-sign-in-alt" style="padding-right: 30px" > Login</a>
                        </li>


                    </ul>
                </div>

            </nav>
        </header>
    </div>-->

    <?php
    require "Header.php"
    ?>
    <div id="main-content">
        <div id="breadcrumb">
            <div class="container">
                <div class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>About Us</li>
                </div>
            </div>
        </div>
        <div>



        </div>
        <div class="aboutus">
            <div class="container">
                <hr>
                <div class="col-sm-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <img src="image/7.jpg" class="img-responsive " style="padding-top: 100px">
                    <h3 class="slogan"><b>Watch, Rate and Buy</b></h3>
                    <h2>Who We Are?</h2>
                    <p>We are Bachelors students of Computer Sciences in
                        <br>the University of Central Punjab.
                        And this website is <br> our project for a course, Web Application Development, <br>in our degree.   </p>
                    <h2> Why We Are Doing This?</h2>
                    <p>We wanted to create a website that will help users choose movies <br> from the vast collection of
                        Pakistani movies provided and choose<br> which  are worth their time and money through reading descriptions<br>
                        and ratings provided . Additionally  our website will enable users to<br> book tickets for the movie they want to watch
                        (that is in cinemas). </p>
                </div>
                <div class="col-sm-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="skill">
                        <img src="image/diff.jpg" class="img-responsive" style="padding-top: 100px">
                        <h2>What makes us different?</h2>

                        <p>While all the other websites that deal with this specific category<br>
                            do not have the services for booking movie tickets ,but this one<br>
                            does and while other websites deal with movies all around the<br>
                            world, ours is exclusively for Pakistani movies only. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-team">
            <div class="container">
                <h3>Our Team</h3>
                <div class="text-center">
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="image/1.png" width="300" height="300" alt="Amber">
                        <h4>Amber <a href=  " https://github.com/unbreenzafar"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/amber.malik.96199"><i class="fab fa-facebook-f"></i></a>      </h4>
                        <p></p>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="image/2.jpg" width="300" height="300" alt="Mayeda">
                        <h4>Mayeda <a href=  "https://github.com/MayedaMeraj"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/mayeda.meraj"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <img src="image/3.jpg" width="300" height="300" alt="Saman">
                        <h4>Saman   <a href=  "https://github.com/SamanKhann"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/profile.php?id=100006636043966"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <img src="image/4.png" width="300" height="300"alt="Shams">
                        <h4>Shams <a href=  "https://github.com/shamsi434"> <i class="fab fa-github"></i></a>
                            <a href=  "https://www.facebook.com/shams.zam"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="image/5.png" width="300" height="300" alt="Aazka">
                        <h4>Aazka <a href=  "https://github.com/Aazka"> <i class="fab fa-github"></i></a>
                            <a href=  "https://facebook.com/aazka.iqbal"><i class="fab fa-facebook-f"></i></a>
                        </h4>
                    </div>
                    <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                        <img src="image/6.png" width="300" height="300"  alt="Adina">
                        <h4>Adina <a href=  "https://github.com/adinaMudassar"> <i class="fab fa-github"></i></a>
                            <a href=  "https://facebook.com/adina.mudassar"><i class="fab fa-facebook-f"></i></a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- <div id="footer">
        <div class="footer">
            <div class="widget-footer">
                <div class="wrap-container">
                    <div class="widgets">
                        <h4>Contact information</h4>
                        <p> Contact information so that you can get in touch with us is easily.</p>
                        <p><strong>Phone:</strong> <br> 03054799126</p>
                        <p><strong>Email</strong> ambermalik205@gmail.com</p>
                    </div>
                    <div class="widgets">
                        <h4>Sign up for newspaper</h4>
                        <p>  For latest news and updates sign up below and stay updated.....</p>
                        <p><strong>Email</strong></p>
                        <input type="text" class="subscribe-text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
                        <button type="Subscribe" class="subscribe-btn">Subscribe</button>
                    </div>
                    <div class="widgets">
                        <h4>Follow on social media</h4>
                        <li><a href="https://www.facebook.com"><span class="fab fa-facebook-square fa-2x "></span>Facebook</a></li>
                        <li><a href="https://www.twitter.com"><span class="fab fa-twitter fa-2x"></span>Twitter</a></li>
                        <li> <a href="https://www.instagram.com"><span class="fab fa-instagram fa-2x"></span>Instagram</a></li>
                    </div>
                    <div class="widgets">
                        <h4>Recent comments</h4>
                        <p><strong>Aazka:</strong>  This is an awesome website</p>
                        <p><strong>Amber:</strong>  very helpful.</p>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <p>copyright &copy; 2018</p>
            </div>
        </div>
    </div>-->
    <?php
    require "Footer.php"
    ?>
</div>
</body>
</html>