<?php
session_start();
if (isset($_SESSION['email'])) {
    exit(header('Location: home/'));
}
?>
<!DOCTYPE html>
<html>
<head> 
    <!-- Meta -->
    <meta charset="utf-8">
    <!-- styles -->
    <title> DevCalender - Free Mobile App </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- favicon -->
    <link rel="icon" href="images/favicon.png">
    
</head>
    

<body>


    <!-- loaded page -->

    <div class="spinner-page">
        <div class="spinner">
            <div class="bounce"></div>
            <div class="bounce"></div>
            <div class="bounce"></div>
        </div>
    </div> 

    <!--start Nav Bar-->

    <div class="navbar wow bounceInDown">
        <div class="container">
            <div class="brand">
                <a href="#">
                    DevCalender
                </a>
            </div>
            <ul class="links display">
                <li class="active" data-scroll="Home"> <a href="#"  data-value="Home"> Home </a> </li>
                <li data-scroll="CLIENTS"> <a href="#" data-value="CLIENTS"> CLIENTS </a> </li>
                <li data-scroll="FEATURES"> <a href="#" data-value="FEATURES"> FEATURES </a> </li>
                <li data-scroll="DETAILS"> <a href="#" data-value="DETAILS"> DETAILS </a> </li>
                <li data-scroll="CONTACT"> <a href="#" data-value="CONTACT"> CONTACT </a> </li>
                <li> <span href="javascript:void(0)" class="last" id="login-popup"> LOGIN </span> </li>
                <li> <span href="javascript:void(0)" class="last" id="reg-popup"> REGISTER </span> </li>                
            </ul>
            <i class="menu-toggle-btn fas fa-bars"></i>  
        </div>
    </div>
    
    <!--End Nav Bar-->

    <!-- Start Header -->

    <div id="Home" class="header block">
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-6">
                        <h1 class="wow slideInLeft" data-wow-delay="1s" data-wow-duration="1s">MOBILE APP <br> FOR <span class="type"></span> </h1>
                        <p class="wow slideInLeft" data-wow-delay="1.5s" data-wow-duration="1s">DevCalender is one of the easiest and best programs to remind you of everything you want to do <br> apps in the market. Download it today!</p>
                        <div class="download wow bounceInUp" data-wow-delay="2.5s" data-wow-duration="1s">
                            <a href="#" class="login-header">
                                <i class="fab fa-apple"></i>
                                Login
                            </a>
                            <a href="#" class="reg-header">
                                <i class="fab fa-google-play"></i>
                                REGISTER
                            </a>
                        </div>
                    </div> 
                    <div class="col-6">
                        <div class="img-container">
                            <img src="images/header-iphone.png" data-tilt class="wow bounceInUp" data-wow-delay="2s" data-wow-duration="1s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Header -->

    <!-- start Testimonials -->
    <!-- Swiper -->
    <div class="Testimonials block" id="CLIENTS">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/testimonial-1.jpg" class="wow bounceIn" data-wow-delay="1s">
                    <p>I just finished my trial period and was so amazed with the support and results that I purchased DevCalender.</p>
                    <h3>Jude Thorn - Designer</h3>
                </div>
                <div class="swiper-slide">
                    <img src="images/testimonial-2.jpg" class="wow bounceIn" data-wow-delay="1.5s">
                    <p>I don't know how I managed to get work done without DevCalender. The speed of this application is amazing!</p>
                    <h3>Roy Smith - Developer</h3>
                </div>
                <div class="swiper-slide">
                    <img src="images/testimonial-3.jpg" class="wow bounceIn" data-wow-delay="2s">
                    <p>This app has the potential of becoming a mandatory tool in every marketer's day to day operations.</p>
                    <h3>Marsha Singer - Marketer</h3>
                </div>
                <div class="swiper-slide">
                    <img src="images/testimonial-4.jpg">
                    <p>Searching for a great marketing automation app was difficult but thankfully I found DevCalender.</p>
                    <h3>Tim Shaw - Designer</h3>
                </div>
                <div class="swiper-slide">
                    <img src="images/testimonial-5.jpg">
                    <p>Who would have thought that DevCalender can provide such amazing results in just a few weeks of use</p>
                    <h3>Ann Black - Developer</h3>
                </div>
                <div class="swiper-slide">
                    <img src="images/testimonial-6.jpg">
                    <p>Who would have thought that DevCalender can provide such amazing results in just a few weeks of use</p>
                    <h3>Ann Black - Developer</h3>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- End Testimonials -->

    <!-- start Features -->

    <div class="Features text-center block" id="FEATURES">
        <div class="container">
            <div class="work-info">
                <h2 class="wow slideInLeft"> FEATURES </h2>
                <p class="wow slideInRight"> DevCalender was designed based on input from personal development <br> coaches and popular trainers so it offers all </p>
            </div>
            <!-- ul list -->
            <div class="trackers">
                <div class="row">
                    <div class="active">
                        <i class="fas fa-cog"></i>
                        CONFIGURING
                    </div>
                    <div>
                        <i class="fas fa-binoculars"></i>
                        TRACKING
                    </div>
                </div>
            </div>
            <!-- info in left and img and info in right -->
            <!-- the first ul -->
            <div class="all-info1">
                <div class="row">
                    <!-- info in left -->
                    <div class="col-lg-4">
                        <div class="card first wow slideInLeft" data-wow-delay="1s">
                            <div class="card-text">
                                <h4>Goal Setting</h4>
                                <p>Like any self improving process, <br> everything starts with setting your <br> goals and committing to them </p>
                            </div>
                            <div class="card-icon">
                                <i class="far fa-compass"></i>
                            </div>
                        </div>
                        <div class="card wow slideInLeft" data-wow-delay="1.5s">
                            <div class="card-text">
                                <h4>Visual Editor</h4>
                                <p>DevCalender provides a well designed and <br> ergonomic visual editor for you to <br> edit your notes and input data </p>
                            </div>
                            <div class="card-icon">
                                <i class="far fa-file-code"></i>
                            </div>
                        </div>
                        <div class="card wow slideInLeft" data-wow-delay="2s">
                            <div class="card-text">
                                <h4>Refined Options</h4>
                                <p>Each option packaged in the app's <br> menus is provided in order to improve <br> your personal development status </p>
                            </div>
                            <div class="card-icon">
                                <i class="far fa-gem"></i>
                            </div>
                        </div>
                    </div>
                    <!-- img  -->
                    <div class="col-lg-4"> 
                        <img src="images/features-iphone-1.png" data-tilt>
                    </div>
                    <!-- info in right -->
                    <div class="col-lg-4">
                        <div class="card first wow slideInRight" data-wow-delay="1s">
                            <div class="card-icon-2">
                                <i class="far fa-compass"></i>
                            </div>
                            <div class="card-text-2">
                                <h4>Goal Setting</h4>
                                <p>Like any self improving process, <br> everything starts with setting your <br> goals and committing to them </p>
                            </div>                            
                        </div>
                        <div class="card wow slideInRight" data-wow-delay="1.5s">
                            <div class="card-icon-2">
                                <i class="far fa-file-code"></i>
                            </div>
                            <div class="card-text-2">
                                <h4>Visual Editor</h4>
                                <p>DevCalender provides a well designed and <br> ergonomic visual editor for you to <br> edit your notes and input data </p>
                            </div>                            
                        </div>
                        <div class="card wow slideInRight" data-wow-delay="2s">
                            <div class="card-icon-2">
                                <i class="far fa-gem"></i>
                            </div>
                            <div class="card-text-2">
                                <h4>Refined Options</h4>
                                <p>Each option packaged in the app's <br> menus is provided in order to improve <br> your personal development status </p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- info 2 -->
            <div class="all-info2 display2">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="images/features-iphone-2.png" data-tilt>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-area">
                            <h3>Track Result Based On Your</h3>
                            <p>After you've configured the app and settled techniques you can not start the <br> information trackers and start collecting. </p>
                        </div>
                        <div class="icons-area">
                            <div class="row">
                                <div class="card">
                                    <div class="card-icon">
                                        <i class="fas fa-cube"></i>
                                    </div>
                                    <div class="card-text">
                                        <h4>Good Foundation</h4>
                                        <p>Get a solid foundation for your self <br> development efforts. Try DevCalender mobile app for <br> any mobile platform </p>
                                    </div>                            
                                </div>
                                <div class="card">
                                    <div class="card-icon">
                                        <i class="far fa-bookmark"></i>
                                    </div>
                                    <div class="card-text">
                                        <h4>Easy Reading</h4>
                                        <p>Reading focus mode for long form articles, <br> ebooks and other materials which involve <br> large text areas</p>
                                    </div>                            
                                </div>   
                                <div class="card">
                                    <div class="card-icon">
                                        <i class="far fa-calendar-check"></i>
                                    </div>
                                    <div class="card-text">
                                        <h4>Calendar Input</h4>
                                        <p>Schedule your appointments, meetings and <br> periodical evaluations using the provided <br> in-app calendar option </p>
                                    </div>                            
                                </div>
                                <div class="card">
                                    <div class="card-icon">
                                        <i class="far fa-file-code"></i>
                                    </div>
                                    <div class="card-text">
                                        <h4>Visual Editor</h4>
                                        <p>DevCalender provides a well designed and ergonomic <br> visual editor for you to edit your notes and <br> input data </p>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>    
            </div>
        </div>
    </div>

    <!-- End Features -->

    <!-- start preview -->

    <div class="preview text-center block" id="PREVIEW">
        <div class="container">
            <div class="preview-info">
                <h2> PREVIEW </h2>
                <p> Target the right customers for your business with the help of <br> DevCalender's patented segmentation technology </p>
                <div class="video-wrapper">
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                        <img src="images/video-frame.jpg">
                        <span class="video-play-button">
                            <span></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End preview -->

    <!-- start details -->

    <div class="details block" id="DETAILS">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" >
                    <img src="images/details-1-iphone.png" class="wow slideInLeft" data-wow-delay="1s" data-tilt>
                </div>
                <div class="col-lg-6">
                    <div class="text-container wow slideInRight" data-wow-delay="1s" >
                        <h3> Goals Setting </h3>
                        <p>DevCalender can easily help you track your personal development evolution if you take the time to properly setup your goals at the beginning of the training process. Check out the details</p>
                        <a href="javascript:void(0)" class="show-popup-login">LIGHTBOX</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container wow slideInLeft" data-wow-delay="1s">
                        <h3> Calendar Input </h3>
                        <p>The calendar input function enables the user to setup training, meditation and relaxation sessions with ease. Just open the feature and start setting up your time as you desire</p>
                        <a href="javascript:void(0)" class="show-popup-login2">LIGHTBOX</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/details-2-iphone.png" class="padding wow slideInRight" data-wow-delay="1s" data-tilt> 
                </div>                
            </div>            
        </div>
    </div>

    <!-- start popup 1 -->

    <div class="popup">
        <div class="inner">
            <div class="box1">
                <a href="javascript:void(0)" class="closebtn">&times;</a>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/details-lightbox-1.png">
                    </div>
                    <div class="col-lg-6">
                        <h3>Goals Setting</h3>
                        <hr>
                        <p class="first">DevCalender can easily help you track your personal development evolution if you take the time to set it up.</p>
                        <h3>User Feedback</h3>
                        <hr>
                        <p class="last">This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                        <div class="all-goals-container">
                            <div class="goals-container">
                                <i class="fas fa-desktop"></i>
                                <p>Responsive layout</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-bullhorn"></i>
                                <p>Distinctive CTAs</p>
                            </div>  
                            <div class="goals-container">
                                <i class="fas fa-image"></i>
                                <p>Image gallery slider</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-envelope"></i>
                                <p>Contact forms</p>
                            </div>
                            <div class="goals-container">
                                <i class="fab fa-font-awesome-flag"></i>
                                <p>FontAwesome icons</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-code"></i>
                                <p>Well-structured code</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <!-- start popup 2 -->
    <div class="popup2">
        <div class="inner2">
            <div class="box2">
                <a href="javascript:void(0)" class="closebtn2">&times;</a>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/details-lightbox-2.png">
                    </div>
                    <div class="col-lg-6">
                        <h3>Calendar Input</h3>
                        <hr>
                        <p class="first">The calendar input function enables the user to setup training, meditation and relaxation sessions with ease.</p>
                        <h3>User Feedback</h3>
                        <hr>
                        <p class="last">This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                        <div class="all-goals-container">
                            <div class="goals-container">
                                <i class="fas fa-desktop"></i>
                                <p>Responsive layout</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-bullhorn"></i>
                                <p>Distinctive CTAs</p>
                            </div>  
                            <div class="goals-container">
                                <i class="fas fa-image"></i>
                                <p>Image gallery slider</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-envelope"></i>
                                <p>Contact forms</p>
                            </div>
                            <div class="goals-container">
                                <i class="fab fa-font-awesome-flag"></i>
                                <p>FontAwesome icons</p>
                            </div>
                            <div class="goals-container">
                                <i class="fas fa-code"></i>
                                <p>Well-structured code</p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <!-- End Details -->

    <!-- start slider 2 -->

    <!-- Swiper -->
    <div class="slider-2">
        <div class="swiper-container">
            <div class="swiper-wrapper items-box">
                <div class="swiper-slide item">
                    <a href="images/screenshot-1.png" data-fancybox="images">
                        <img src="images/screenshot-1.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-2.png" data-fancybox="images">
                        <img src="images/screenshot-2.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-3.png" data-fancybox="images">
                        <img src="images/screenshot-3.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-4.png" data-fancybox="images">
                        <img src="images/screenshot-4.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-5.png" data-fancybox="images">
                        <img src="images/screenshot-5.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-6.png" data-fancybox="images">
                        <img src="images/screenshot-6.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-7.png" data-fancybox="images">
                        <img src="images/screenshot-7.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-8.png" data-fancybox="images">
                        <img src="images/screenshot-8.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-9.png" data-fancybox="images">
                        <img src="images/screenshot-9.png">
                    </a>
                </div>
                <div class="swiper-slide item">
                    <a href="images/screenshot-10.png" data-fancybox="images">
                        <img src="images/screenshot-10.png">
                    </a>
                </div>
            </div>                                         
        </div>
    </div>

    <!-- End slider 2 -->

    <!-- start downloader -->

    <div class="downloader">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>Download <span>DevCalender</span> </h2>
                        <p>Target the right customers for your business with the help of DevCalender's patented technology and increase conversion figures in less than 2 weeks</p>
                        <a href="#">
                            <i class="fab fa-apple"></i>
                            APP STORE
                        </a>
                        <a href="#">
                            <i class="fab fa-google-play"></i>
                            PLAY STORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="image-container">
                        <img src="images/download.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End downloader -->

    <!-- start count up -->

    <div class="counter">
            <div class="counting-sec">
                <div class="inner-width">
                    <div class="col">
                    <i class="far fa-smile-wink"></i>
                    <div class="num">231</div>
                    <span>Happy Users </span>
                    </div>
                    <div class="col">
                    <i class="fas fa-briefcase"></i>
                    <div class="num">85</div>
                    <span>Registered tasks</span>
                    </div>
                    <div class="col">
                    <i class="far fa-money-bill-alt"></i>
                    <div class="num">59</div>
                    <span>Good Reviews </span>
                    </div>
                    <div class="col">
                    <i class="far fa-object-group"></i>
                    <div class="num">127</div>
                    <span>Case Studies </span>
                    </div>
                </div>
            </div>
    </div>

    <!-- end count up -->

    <!-- start contact -->

    <div class="contact block" id="CONTACT">
        <div class="container">
            <div class="textcontact-container">
                <h2>CONTACT</h2>
                <ul>
                    <li class="first">Don't hesitate to give us a call or just use the contact form below</li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        22 Innovative, San Francisco, CA 94043, US
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        +81 720 2212
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        office@BugDealers.com
                    </li>
                </ul>
                <div class="row">
                    <form novalidate="true">
                        <div class="form-group engarb">
                            <input type="text" placeholder="Name" class="wow slideInLeft" data-wow-delay="1s">
                        </div>
                        <div class="form-group engarb">
                            <input type="email" placeholder="Email" class="wow slideInRight" data-wow-delay="1s">
                        </div>
                        <div class="form-group engarb">
                            <textarea cols="30" rows="10" placeholder="Your Message" class="wow fadeInUp" data-wow-delay="1s"></textarea>
                        </div>
                        <div class="form-group engarb">
                            <input type="checkbox">
                            I have read and agree to DevCalender's stated conditions in Privacy Policy
                        </div>
                        <div class="form-group">
                            <button>SUBMIT MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- end contact -->

    <!-- start footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-col">
                        <h4>About DevCalender</h4>
                        <p>We're passionate about creating the best mobile apps for personal development</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul>
                            <li>
                                <i class="fas fa-square"></i>
                                <div class="media-body">
                                    Our business partners <a href="#">startupguide.com </a> 
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-square"></i>
                                <div class="media-body">
                                    Read our <a href="#"> Terms & Conditions </a>, <a href="#"> Privacy Policy </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-col rounded-social-buttons">
                        <h4>Social Media</h4>
                        <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-button google" href="https://www.twitter.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        <a class="social-button instagram" href="https://www.twitter.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="social-button linkedin" href="https://www.twitter.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end footer -->

    <hr>

    <!-- start copyright -->

    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © DevCalender - Mobile App Landing Page  by <a href="#"> Yossef Kamel </a> </p>
                </div>
            </div>
        </div>
    </div>

    <!-- END copyright -->


    <!--Button To Top-->

    <i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i>

    <!-- start login  -->

    <div class="log-popup">
        <div class="inner">
            <div class="box">
                <div class="login-form">
                    <h2>Welcome Back!</h2>
                    <div id="response" style="
                    width:107%;
                    border:#05ff05;
                    border-radius:4%;
                    position:relative;
                    padding-top:7px;
                    margin:9px;
                    left:-14px;
                    font-weight:bold;
                    color:#171313;
                    ">
                        
                    </div>
                    <h6>Sign In</h6>
                        <div class="textbox">
                        <input type="email" id="email" placeholder="Email">
                        </div>

                        <div class="textbox">
                        <input class="pass" id="password" type="password" placeholder="Password">
                        </div>

                        <div class="options">
                        <label class="remember-me">
                            <span class="checkbox">
                            <input type="checkbox">
                            <span class="checked"></span>
                            </span>
                            Remember me
                        </label>

                        <a href="#">Forgot Your Password</a>
                        </div>

                        <button onclick="Login_Passes()" id="LogBtn" class="login-btn active">LOG IN NOW</button>
                        <div class="privacy-link">
                        <a href="#">Privacy Policy</a>
                        </div>
                    <div class="dont-have-account">
                        Don't have an DevCalender account?
                        <a href="#" class="reg2">Sign Up</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <!-- end login -->

    <!-- start register -->

    <div class="reg-popup">
        <div class="inner">
            <div class="box">
                <div class="reg-form">
                    <h2>Sign up</h2>
                    <h6 id="reg-response" style="color:red;padding-top:8px;"></h6>
                        <div class="textbox">
                        <input type="email" id="reg_email" placeholder="Email" required>
                        </div>

                        <div class="textbox">
                        <input class="pass1" id="reg_pass1" type="password" placeholder="Password" required>
                        </div>

                        <div class="textbox">
                        <input class="pass2" id="reg_pass2" type="password" placeholder="Repeat password" required>
                        </div>                            

                        <input type="submit" value="REGISTER" class="reg-btn active" onclick="Register()">

                    <div class="dont-have-account">
                        Already Have An Account ?
                        <a href="#" class="sign2">Sign In</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>    

    <!-- End register -->


    <!-- =================================================================== END OF CODE =========================================== -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script type="text/javascript" src="js/_Log1N.js"></script>
    <script type="text/javascript" src="js/register.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/tilt.jquery.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/test.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        // init: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
            slidesPerView: 1,
            spaceBetween: 20,
            },
            768: {
            slidesPerView: 2,
            spaceBetween: 40,
            },
            1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            },
        }
        });
    </script>    
    <script>
        new WOW().init();
    </script>
</body>
</html>
