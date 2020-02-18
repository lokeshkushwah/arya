<?php

//Yii::$app->cache->flush();
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$users = Yii::$app->user->id;

$this->title = 'online exam hub';

//$this->params['breadcrumbs'][] = $this->title;
?>
    


<!-- Site top Start -->
<div id="tl-site-top" class="tl-site-top">
   <div id="tl-topbar" class="tl-topbar">
      <div class="container">
   <div class="row">
      <div class="col-lg-8 ml-lg-auto">
         <div class="tl-topbar-menu float-lg-right">
            <ul class="unstyled list-inline">
               <li><a href="#">Have Any Question?</a></li>
               <li><a href="#">Go For Admissions Without Any Race</a></li>
               <li class="tl-user-form">
                  <a href="login.html">Sign In</a>
                  <a href="register.html">Register</a>
               </li>
            </ul> <!-- List End -->
         </div> <!-- Topbar End -->
      </div> <!-- Col End -->
      <div class="col-lg-3">
         <div class="tl-topbar-social-links float-lg-right">
            <ul class="unstyled list-inline">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul> <!-- List End -->
         </div> <!-- Social Links End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container End -->   </div>
   <header id="tl-header" class="tl-header">
      <div class="tl-logo-area">
         <div class="container">
   <div class="row align-items-lg-center">
      <div class="col-lg-2">
         <div class="tl-logo">
             <a href="index-2.html"><img src="<?php echo \yii\helpers\Url::home(); ?>images/logos/logo.png" alt="" class="mg-fluid"></a>
         </div>
      </div> <!-- Col End -->
      <div class="col-lg-7 ml-auto">
         <div class="header-info">
            <ul class="unstyled list-inline top-info">
               <li>
                  <span class="info-icon"><i class="icon icon-telephone"></i></span>
                  <div class="info-wrapper">
                     <p class="info-title">(+09) 023 039282</p>
                     <p class="info-subtitle">example@domain.com</p>
                  </div> <!-- Info wrapper end -->
               </li> <!-- Li end -->
               <li>
                  <span class="info-icon"><i class="icon icon-location-pin"></i></span>
                  <div class="info-wrapper">
                     <p class="info-title">Road-10, Sec-05</p>
                     <p class="info-subtitle">Uttara City, Dhaka</p>
                  </div> <!-- Info wrapper end -->
               </li> <!-- Li end -->
               <li>
                  <span class="info-icon"><i class="icon icon-time"></i></span>
                  <div class="info-wrapper">
                     <p class="info-title">08:25 - 24:00</p>
                     <p class="info-subtitle">Monday to Friday</p>
                  </div> <!-- Info wrapper end -->
               </li> <!-- Li end -->
            </ul> <!-- Top info end -->
         </div> <!-- Header Info End -->
      </div> <!-- Col End -->
      <div class="col-lg-2">
         <a href="#" class="btn btn-primary btn-md">enquire now</a>
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end -->      </div>
      <div class="site-navigation" data-toggle="affix">
         <div class="container">
   <nav class="navbar navbar-expand-lg">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon">
            <i class="icon icon-menu"></i>
         </span>
      </button><!-- End of Navbar toggler-->
      <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
         <ul class="navbar-nav ">
            <li class="nav-item dropdown ">
               <a class="nav-link" href="#" data-toggle="dropdown">
                  Home
                  <span class="nav-indicator">
                     <i class="fa fa-angle-down"></i>
                  </span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li class="nav-item"><a href="index-2.html">Home One</a></li>
                  <li class="nav-item"><a href="index2.html">Home Two</a></li>
               </ul>
            </li><!-- li end-->
            <li class="nav-item dropdown">
               <a class="nav-link" href="#" data-toggle="dropdown">
                     Pages
                  <span class="nav-indicator">
                     <i class="fa fa-angle-down"></i>
                  </span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li class="nav-item"><a href="about-us.html">About Us</a></li>
                  <li class="nav-item"><a href="features-all.html">Features All</a></li>
                  <li class="nav-item"><a href="register.html">Register</a></li>
                  <li class="nav-item"><a href="login.html">Login</a></li>
                  <li class="nav-item"><a href="404.html">404</a></li>
               </ul>
            </li><!-- li end-->
            <li class="nav-item dropdown ">
               <a class="nav-link" href="#" data-toggle="dropdown">
                  Courses
                  <span class="nav-indicator">
                     <i class="fa fa-angle-down"></i>
                  </span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li class="nav-item"><a href="course-all.html">Course All</a></li>
                  <li class="nav-item"><a href="course-single.html">Course Single</a></li>
               </ul>
            </li><!-- li end-->
            <li class="nav-item dropdown">
               <a class="nav-link" href="#">
                  News
                  <span class="nav-indicator">
                     <i class="fa fa-angle-down"></i>
                  </span>
               </a>
               <ul class="dropdown-menu" role="menu">
                  <li class="nav-item"><a href="news-right-sidebar.html">News Right</a></li>
                  <li class="nav-item"><a href="news-left-sidebar.html">News Left</a></li>
                  <li class="nav-item"><a href="news-single.html">News Single</a></li>
               </ul>
            </li><!-- li end-->
            <li class="nav-item dropdown"><a class="nav-link" href="contact-us.html">Contact</a></li><!-- li end-->
         </ul><!--Nav ul end-->
      </div> <!-- Navbar Collapse End -->
   </nav> <!-- Nav End -->
</div> <!-- Container end -->      </div>
   </header>
</div>
<!-- Site top End -->

<!-- Carousel Start -->
<div id="tl-slider" class="tl-slider">
   <div class="tl-slider-carousel owl-carousel">
   <div class="tl-slider-wrapper" style="background-image: url(<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-bg1.jpg)">
      <div class="slider-inner">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="slider-content">
                     <h1 class="slider-title">Your Child Is Our Asset</h1>
                     <p class="slider-text">
                        We have 20 years Experience on this profession. it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                     </p> <!-- Slider text end -->
                     <div class="slider-btn">
                        <a href="#" class="btn btn-primary btn-lg">Contact Us today</a>
                        <a href="#" class="btn btn-border">Enrol Now</a>
                     </div> <!-- Slider btn end -->
                  </div> <!-- Slider Content end -->
               </div> <!-- COl End -->
            </div> <!-- Row End -->
            <div class="slider-img">
               <span><img src="<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-img1.png" alt="" class="img-fluid"></span>
            </div> <!-- Slider img end -->
         </div> <!-- Container end -->
      </div> <!-- Slider Inner end -->
   </div> <!-- Slider Wrapper end -->
   <div class="tl-slider-wrapper" style="background-image: url(<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-bg1.jpg)">
      <div class="slider-inner">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="slider-content">
                     <h1 class="slider-title">Your Child Is Our Asset</h1>
                     <p class="slider-text">
                        We have 20 years Experience on this profession. it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                     </p> <!-- Slider text end -->
                     <div class="slider-btn">
                        <a href="#" class="btn btn-primary btn-lg">Contact Us today</a>
                        <a href="#" class="btn btn-border">Enrol Now</a>
                     </div> <!-- Slider btn end -->
                  </div> <!-- Slider Content end -->
               </div> <!-- COl End -->
            </div> <!-- Row End -->
            <div class="slider-img">
               <span><img src="<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-img1.png" alt="" class="img-fluid"></span>
            </div> <!-- Slider img end -->
         </div> <!-- Container end -->
      </div> <!-- Slider Inner end -->
   </div> <!-- Slider Wrapper end -->
</div> <!-- Slider Carousel end --></div>
<!-- Carousel End -->

<!-- Intro Area Start -->
<section id="tl-intro" class="tl-intro bg-solid">
   <div class="container">
   <div class="row no-gutters">
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".1s">
         <a href="#" class="tl-intro-wrapper bg-yellow">
            <span class="intro-icon">
               <i class="icon icon-calendar"></i>
            </span> <!-- Intro Icon End -->
            <div class="intro-content">
               <h6 class="intro-title">Visit School Today</h6>
               <p>We hope that we are the best</p>
            </div> <!-- Intro Content end -->
         </a> <!-- Intro Wrapper end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".3s">
         <a href="#" class="tl-intro-wrapper bg-green">
            <span class="intro-icon">
               <i class="icon icon-bell"></i>
            </span> <!-- Intro Icon End -->
            <div class="intro-content">
               <h6 class="intro-title">Inquire</h6>
               <p>We have total 30 high quality building</p>
            </div> <!-- Intro Content end -->
         </a> <!-- Intro Wrapper end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".5s">
         <a href="#" class="tl-intro-wrapper bg-orange">
            <span class="intro-icon">
               <i class="icon icon-internet"></i>
            </span> <!-- Intro Icon End -->
            <div class="intro-content">
               <h6 class="intro-title">Online Application</h6>
               <p>Just click and apply for admission</p>
            </div> <!-- Intro Content end -->
         </a> <!-- Intro Wrapper end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- Intro Area End -->

<!-- About Area Start -->
<section id="tl-about" class="tl-about">
   <div class="container">
   <div class="row">
      <div class="col-lg-8">
         <h2 class="column-title wow fadeIn" data-wow-delay=".1s">
            Welcome to Our <br/>Studylab Online Kindergarten
         </h2>
         <div class="about-content">
            <p class="wow fadeIn">I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
            <a href="#" class="readmore-btn">Read More About Us</a>
            <div class="row">
               <div class="col-lg-6 wow fadeIn" data-wow-delay=".1s">
                  <div class="about-box about-bg bg-overlay-green" style="background-image: url(<?php echo \yii\helpers\Url::home(); ?>images/about/about-bg1.jpg)">
                     <h3>EmployMent Vacancies</h3>
                     <p>To take a trivial example, which of us ever undertakes laborious..</p>
                     <a href="#" class="btn btn-border">View Vacancies</a>
                  </div> <!-- About Box end -->
               </div> <!-- Col End -->
               <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                  <div class="about-box about-bg bg-overlay-red" style="background-image: url(<?php echo \yii\helpers\Url::home(); ?>images/about/about-bg2.jpg)">
                     <h3>DiD You Know?</h3>
                     <p>ho has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying...</p>
                     <a href="#" class="btn btn-border">Find Out More</a>
                  </div> <!-- About Box end -->
               </div> <!-- Col End -->
            </div> <!-- Row End -->
         </div> <!-- About Content end -->
      </div> <!-- Col end -->
      <div class="col-lg-4 wow fadeInRight">
         <div class="about-event">
            <h2 class="event-title">Upcoming Events</h2>
            <div class="event-box-wrapper">
               <div class="event-time">
                  <span class="event-date">20</span>
                  <span class="event-month">July</span>
               </div> <!-- Event Time End -->
               <div class="event-info">
                  <h5 class="event-name">Annual Sports Day</h5>
                  <div class="event-location">
                     <span class="event-tiem-info"><i class="fa fa-clock-o"></i>8:00 AM - 5:00 PM</span>
                     <span class="event-location-info"><i class="fa fa-map-marker"></i>Uttara</span>
                  </div> <!-- Event Location end -->
                  <p class="event-desc">We ever undertakes laborious physical exercise, except to obtain some..</p>
               </div> <!-- Event Info end -->
            </div> <!-- Event Box End -->
            <div class="event-box-wrapper">
               <div class="event-time">
                  <span class="event-date">10</span>
                  <span class="event-month">Aug</span>
               </div> <!-- Event Time End -->
               <div class="event-info">
                  <h5 class="event-name">Christmas Picnic</h5>
                  <div class="event-location">
                     <span class="event-tiem-info"><i class="fa fa-clock-o"></i>8:00 AM - 5:00 PM</span>
                     <span class="event-location-info"><i class="fa fa-map-marker"></i>Uttara</span>
                  </div> <!-- Event Location end -->
                  <p class="event-desc">We ever undertakes laborious physical exercise, except to obtain some..</p>
               </div> <!-- Event Info end -->
            </div> <!-- Event Box End -->
            <div class="event-box-wrapper"">
               <div class="event-time">
                  <span class="event-date">04</span>
                  <span class="event-month">Sep</span>
               </div> <!-- Event Time End -->
               <div class="event-info">
                  <h5 class="event-name">Annual Result Publish</h5>
                  <div class="event-location">
                     <span class="event-tiem-info"><i class="fa fa-clock-o"></i>8:00 AM - 5:00 PM</span>
                     <span class="event-location-info"><i class="fa fa-map-marker"></i>Uttara</span>
                  </div> <!-- Event Location end -->
                  <p class="event-desc">We ever undertakes laborious physical exercise, except to obtain some..</p>
               </div> <!-- Event Info end -->
            </div> <!-- Event Box End -->
         </div> <!-- About Event End -->
      </div><!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- About Area End -->

<!-- Service Area Start -->
<section id="tl-service" class="tl-service bg-solid">
   <div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
         <div class="section-header wow fadeIn">
            <h2 class="section-title">Our Most Popular Activities</h2>
            <p class="section-desc">WE must explain to you how all this mistaken idea of denouncing pleasure and
               praising pain was born and I will give you a complete account of the system,</p>
         </div> <!-- Section Header End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".1s">
         <div class="single-service-box">
            <div class="service-header color-green">
               <i class="icon icon-music"></i>
               <h3 class="service-title">Music Programs</h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".3s">
         <div class="single-service-box">
            <div class="service-header color-yellow">
               <i class="icon icon-journalist"></i>
               <h3 class="service-title">Debate Class</h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".5s">
         <div class="single-service-box">
            <div class="service-header color-orange">
               <i class="icon icon-language"></i>
               <h3 class="service-title">Languages Club</h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="gap-30"></div>
   <div class="row">
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".7s">
         <div class="single-service-box">
            <div class="service-header color-orange">
               <i class="icon icon-art"></i>
               <h3 class="service-title">Art board Classes</h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay=".9s">
         <div class="single-service-box">
            <div class="service-header color-green">
               <i class="icon icon-medal"></i>
               <h3 class="service-title">Sports Programs </h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow zoomIn" data-wow-delay="1.1s">
         <div class="single-service-box">
            <div class="service-header color-yellow">
               <i class="icon icon-ballerina"></i>
               <h3 class="service-title">Dance Class</h3>
            </div> <!-- Service Header end -->
            <p class="service-desc">there anyone who loves or pursues or desires to obtain pain of itself, because it
               is pain.</p>
         </div> <!-- Single Service end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- Service Area End -->

<!-- FunFact Area Start -->
<section id="tl-funfact" class="tl-funfact bg-overlay-green">
   <div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
         <div class="section-header wow fadeIn">
            <h2 class="section-title">What Our Achieves</h2>
            <p class="section-desc">We must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,</p>
         </div> <!-- Section Header End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-md-4 wow fadeInUp" data-wow-delay=".1s">
         <div class="single-counter-box">
            <span class="counter-icon">
               <i class="icon icon-users-couple"></i>
            </span>
            <div class="counter-content">
               <span class="counter-up">120</span>+ K
               <h3 class="counter-title">Students Enrolled</h3>
            </div> <!-- Counter Content end -->
         </div> <!-- Single Counter Box end -->
      </div> <!-- Col End -->
      <div class="col-md-4 wow fadeInUp" data-wow-delay=".3s">
         <div class="single-counter-box">
            <span class="counter-icon">
               <i class="icon icon-face"></i>
            </span>
            <div class="counter-content">
               <span class="counter-up">100</span>%
               <h3 class="counter-title">Satisfied Parents</h3>
            </div> <!-- Counter Content end -->
         </div> <!-- Single Counter Box end -->
      </div> <!-- Col End -->
      <div class="col-md-4 wow fadeInUp" data-wow-delay=".5s">
         <div class="single-counter-box">
            <span class="counter-icon">
               <i class="icon icon-award"></i>
            </span>
            <div class="counter-content">
               <span class="counter-up">591</span>
               <h3 class="counter-title">Award Achieve</h3>
            </div> <!-- Counter Content end -->
         </div> <!-- Single Counter Box end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- FunFact Area End -->

<!-- Feature Area Start -->
<section id="tl-feature" class="tl-feature">
   <div class="container">
   <div class="row">
      <div class="col-lg-12">
         <h2 class="column-title wow fadeIn">
            Our New Features
         </h2>
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-lg-4 wow fadeIn" data-wow-delay=".1s">
         <div class="feature-box-wrapper">
            <div class="feature-img">
               <span><img src="<?php echo \yii\helpers\Url::home(); ?>images/feature/feature-img1.jpg" alt="" class="img-fluid"></span>
            </div> <!-- Feature Image End -->
            <div class="feature-content">
               <h5 class="feature-title">We Offer Our Best Service</h5>
               <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
               <a class="readmore-btn readmore" href="#">Read more</a>
            </div> <!-- Feature Content end -->
         </div><!-- Feature Box end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow fadeIn" data-wow-delay=".3s">
         <div class="feature-box-wrapper">
            <div class="feature-img">
               <span><img src="<?php echo \yii\helpers\Url::home(); ?>images/feature/feature-img2.jpg" alt="" class="img-fluid"></span>
               <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-icon video-play-btn">
                  <i class="fa fa-play"></i>
               </a>
            </div> <!-- Feature Image End -->
            <div class="feature-content">
               <h5 class="feature-title">Create Strategies With Video</h5>
               <p>I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
               <a class="readmore-btn readmore" href="#">Read more</a>
            </div> <!-- Feature Content end -->
         </div><!-- Feature Box end -->
      </div> <!-- Col End -->
      <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
         <div class="feature-schedule-box">
            <h3 class="schedule-title">Our Working Hours</h3>
            <ul class="unstyled schedule-menu">
               <li class="schedule-shift">Working Time (Morning Shift)</li>
               <li class="schedule-time color-green">Monday to Sunday <span>8:00 AM -  12:00 PM</span></li>
               <li class="schedule-shift">Working Time (Day Shift)</li>
               <li class="schedule-time color-orange">Monday to Sunday <span>2:00 AM -  04:00 PM</span></li>
               <li class="schedule-link"><a href="#">Go To More Info <i class="fa fa-arrow-right"></i></a></li>
            </ul>  <!-- Schedule menu end -->
         </div> <!-- feature schedule end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container End --></section>
<!-- Feature Area End -->

<!-- Testimonial Area Start -->
<section id="tl-testimonial" class="tl-testimonial bg-solid">
   <div class="testimonial-bg">
   <img src="<?php echo \yii\helpers\Url::home(); ?>images/testimonial/testimonial-bg.png" alt="">
</div>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
         <div class="section-header wow fadeIn">
            <h2 class="section-title">What Says Our Parents</h2>
         </div> <!-- Section Header End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-lg-10 wow fadeIn">
         <div class="testimonail-single-slider owl-carousel">
            <div class="testimonial-content-wrapper">
               <span class="testimonial-img"><img src="<?php echo \yii\helpers\Url::home(); ?>images/testimonial/client-img1.jpg" alt=""></span>
               <div class="testiomonial-content">
                  <h4 class="client-name">Jhon Smith</h4>
                  <p class="client-msg">The other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
               </div> <!-- Testimonial content end -->
            </div> <!-- Testimonial wrapper end -->
            <div class="testimonial-content-wrapper">
               <span class="testimonial-img"><img src="<?php echo \yii\helpers\Url::home(); ?>images/testimonial/client-img1.jpg" alt=""></span>
               <div class="testiomonial-content">
                  <h4 class="client-name">Jhon Smith</h4>
                  <p class="client-msg">The other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
               </div> <!-- Testimonial content end -->
            </div> <!-- Testimonial wrapper end -->
            <div class="testimonial-content-wrapper">
               <span class="testimonial-img"><img src="<?php echo \yii\helpers\Url::home(); ?>images/testimonial/client-img1.jpg" alt=""></span>
               <div class="testiomonial-content">
                  <h4 class="client-name">Jhon Smith</h4>
                  <p class="client-msg">The other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
               </div> <!-- Testimonial content end -->
            </div> <!-- Testimonial wrapper end -->
         </div> <!-- Testimonial slide End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- Testimonial Area End -->

<!-- Portfolio Area Start -->
<section id="tl-portfolio" class="tl-portfolio">
   <div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
         <div class="section-header wow fadeIn">
            <h2 class="section-title">Our Student Gallery</h2>
         </div> <!-- Section Header End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-lg-12">
         <ul class="portfolio-menu unstyled list-inline wow fadeInUp">
            <li class="active" data-filter="*">All</li>
            <li data-filter=".event">Events</li>
            <li data-filter=".holyday">Holydays</li>
            <li data-filter=".award">Award</li>
            <li data-filter=".presentsday">Presents Day</li>
         </ul>
         <div class="grid portfolio-grid">
            <div class="element-item event holyday wow fadeInUp" data-wow-delay=".1s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img1.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img1.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item holyday presentsday wow fadeInUp" data-wow-delay=".2s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img2.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img2.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item award presentsday wow fadeInUp" data-wow-delay=".3s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img3.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img3.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item presentsday event wow fadeInUp" data-wow-delay=".4s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img4.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img4.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item event award wow fadeInUp" data-wow-delay=".5s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img5.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img5.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item holyday presentsday wow fadeInUp" data-wow-delay=".6s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img6.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img6.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item award presentsday wow fadeInUp" data-wow-delay=".7s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img7.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img7.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
            <div class="element-item presentsday wow fadeInUp" data-wow-delay=".8s">
               <a href="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img8.jpg"><img src="<?php echo \yii\helpers\Url::home(); ?>images/portfolio/portfolio-img8.jpg" alt="" class="img-fluid"></a>
            </div> <!-- Element Item End -->
         </div> <!-- Grid End -->
         <div class="portfolio-btn wow fadeInUp" data-wow-delay=".9s">
            <a href="#" class="btn btn-border btn-lg">Explore More Photos</a>
         </div> <!-- Portfolio BTN end -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- Portfolio Area End -->

<!-- News Area Start -->
<section id="tl-news" class="tl-news bg-solid">
   <div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-7 text-center">
         <div class="section-header wow fadeIn">
            <h2 class="section-title">Our Latest News</h2>
         </div> <!-- Section Header End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
   <div class="row">
      <div class="col-lg-4 wow fadeInUp" data-wow-delay=".1s">
         <div class="tl-latest-post">
            <div class="latest-post-media">
               <img src="<?php echo \yii\helpers\Url::home(); ?>images/news/post-img1.jpg" alt="blog_image_one" class="img-fluid">
               <div class="post-meta">
                  <span class="post-author">
                     <i class="fa fa-user"></i> <a href="#">Jonathon Smith</a>
                  </span>
               </div><!-- End Post Meta -->
            </div><!-- End Latest Post Media -->
            <div class="post-body">
               <div class="post-item-date">
                  <div class="post-date">
                     <span class="post-time">
                        <i class="fa fa-clock-o"></i>
                        <span class="date">July 20</span>
                        <span class="year">2017</span>
                     </span> <!-- Post time end -->
                     <span class="post-comment">
                        <i class="icon icon-comment"></i>
                        <a href="#" class="comments-link">No Comments</a>
                     </span><!-- Post Comment end -->
                  </div><!-- Post date end -->
               </div><!-- End Post Item Date -->
               <div class="post-info">
                  <h4 class="post-title"><a href="#">How To Learn Web Development Easily</a></h4>
                  <div class="entry-content">
                     <p>the claims of duty or the obligations of business it will frequently occur that pleasures..</p>
                  </div><!-- End Entry Content -->
                  <a href="#" class="readmore-btn">read more <i class="fa fa-angle-right"></i></a>
               </div><!-- End Post info -->
            </div><!-- End Post Body -->
         </div><!-- End Tw Latest Post -->
      </div> <!-- Col end -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
         <div class="tl-latest-post">
            <div class="latest-post-media">
               <img src="<?php echo \yii\helpers\Url::home(); ?>images/news/post-img2.jpg" alt="blog_image_one" class="img-fluid">
               <div class="post-meta">
                  <span class="post-author">
                     <i class="fa fa-user"></i> <a href="#">Jonathon Smith</a>
                  </span>
               </div><!-- End Post Meta -->
            </div><!-- End Latest Post Media -->
            <div class="post-body">
               <div class="post-item-date">
                  <div class="post-date">
                     <span class="post-time">
                        <i class="fa fa-clock-o"></i>
                        <span class="date">July 20</span>
                        <span class="year">2017</span>
                     </span> <!-- Post time end -->
                     <span class="post-comment">
                        <i class="icon icon-comment"></i>
                        <a href="#" class="comments-link">No Comments</a>
                     </span><!-- Post Comment end -->
                  </div><!-- Post date end -->
               </div><!-- End Post Item Date -->
               <div class="post-info">
                  <h4 class="post-title"><a href="#">Easily Improved Your English Skill and learning</a></h4>
                  <div class="entry-content">
                     <p>the claims of duty or the obligations of business it will frequently occur that pleasures..</p>
                  </div><!-- End Entry Content -->
                  <a href="#" class="readmore-btn">read more <i class="fa fa-angle-right"></i></a>
               </div><!-- End Post info -->
            </div><!-- End Post Body -->
         </div><!-- End Tw Latest Post -->
      </div> <!-- Col end -->
      <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
         <div class="tl-latest-post">
            <div class="latest-post-media">
               <img src="<?php echo \yii\helpers\Url::home(); ?>images/news/post-img3.jpg" alt="blog_image_one" class="img-fluid">
               <div class="post-meta">
                  <span class="post-author">
                     <i class="fa fa-user"></i> <a href="#">Jonathon Smith</a>
                  </span>
               </div><!-- End Post Meta -->
            </div><!-- End Latest Post Media -->
            <div class="post-body">
               <div class="post-item-date">
                  <div class="post-date">
                     <span class="post-time">
                        <i class="fa fa-clock-o"></i>
                        <span class="date">July 20</span>
                        <span class="year">2017</span>
                     </span> <!-- Post time end -->
                     <span class="post-comment">
                        <i class="icon icon-comment"></i>
                        <a href="#" class="comments-link">No Comments</a>
                     </span><!-- Post Comment end -->
                  </div><!-- Post date end -->
               </div><!-- End Post Item Date -->
               <div class="post-info">
                  <h4 class="post-title"><a href="#">English Vocabolary and Grammer learning class</a></h4>
                  <div class="entry-content">
                     <p>the claims of duty or the obligations of business it will frequently occur that pleasures..</p>
                  </div><!-- End Entry Content -->
                  <a href="#" class="readmore-btn">read more <i class="fa fa-angle-right"></i></a>
               </div><!-- End Post info -->
            </div><!-- End Post Body -->
         </div><!-- End Tw Latest Post -->
      </div> <!-- Col end -->
   </div> <!-- Row end -->
</div> <!-- Container end --></section>
<!-- News Area End -->

<!-- Partner Area Start -->
<section id="tl-partner" class="tl-partner">
   <div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="partner-carousel owl-carousel">
            <div class="partner-logo wow fadeIn" data-wow-delay=".1s">
               <figure class="partner-item">
                  <a href="#"><img class="img-fluid" src="<?php echo \yii\helpers\Url::home(); ?>images/client/client1.png" alt=""></a>
               </figure><!-- Partner Item end -->
            </div> <!-- Partner Logo end -->
            <div class="partner-logo wow fadeIn" data-wow-delay=".2s">
               <figure class="partner-item">
                  <a href="#"><img class="img-fluid" src="<?php echo \yii\helpers\Url::home(); ?>images/client/client2.png" alt=""></a>
               </figure><!-- Partner Item end -->
            </div> <!-- Partner Logo end -->
            <div class="partner-logo wow fadeIn" data-wow-delay=".3s">
               <figure class="partner-item">
                  <a href="#"><img class="img-fluid" src="<?php echo \yii\helpers\Url::home(); ?>images/client/client3.png" alt=""></a>
               </figure><!-- Partner Item end -->
            </div> <!-- Partner Logo end -->
            <div class="partner-logo wow fadeIn" data-wow-delay=".4s">
               <figure class="partner-item">
                  <a href="#"><img class="img-fluid" src="<?php echo \yii\helpers\Url::home(); ?>images/client/client4.png" alt=""></a>
               </figure><!-- Partner Item end -->
            </div> <!-- Partner Logo end -->
         </div> <!-- Partner Carousel End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- container end --></section>
<!-- Partner Area End -->

<!-- Call To Action Area Start -->
<section id="tl-cta" class="tl-cta bg-green">
   <div class="container">
   <div class="row align-items-lg-center">
      <div class="col-lg-5">
         <div class="cta-content">
            <h3 class="cta-title">Subscribe Today</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat.</p>
         </div> <!-- Cta content end -->
      </div> <!-- Col End -->
      <div class="col-lg-6 ml-auto">
         <div class="cta-form">
            <form action="#" class="newsletter">
               <div class="form-row">
                  <input type="email" class="form-control" placeholder="Your Email Address">
                  <button type="submit">Subscribe</button>
               </div> <!-- Form Row End -->
            </form> <!-- Newsletter end -->
         </div> <!-- CTA form End -->
      </div> <!-- Col End -->
   </div> <!-- Row End -->
</div> <!-- Container end --></section>
<!-- Call To Action Area End -->
