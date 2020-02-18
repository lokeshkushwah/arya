<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\NewAsset;
//use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

NewAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">

<head>
  <meta charset="<?=Yii::$app->charset?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?=Html::csrfMetaTags()?>
  <title><?=Html::encode($this->title)?> </title>
  <?php $this->head()?>
</head>

<body class="home1">
  <?php $this->beginBody()?>


  <!--Preloader area start here-->
  <div class="book_preload">
    <div class="book">
      <div class="book__page"></div>
      <div class="book__page"></div>
      <div class="book__page"></div>
    </div>
  </div>
  <!--Preloader area end here-->

  <!--Full width header Start-->
  <div class="full-width-header">

    <!-- Toolbar Start -->
    <div class="rs-toolbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="rs-toolbar-left">
              <div class="welcome-message">
                <img style="margin-top: 0px;" src="aryabhatt/images/ABC1.png" alt="logo"></a><span>

                </span>

              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="rs-toolbar-right">
              <div class="toolbar-share-icon">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <!--<a href="#" class="apply-btn">Apply Now</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">

      <!-- Header Top Start -->
      <div class="rs-header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="header-contact">
                <div id="info-details" class="widget-text">
                  <i class="glyph-icon flaticon-email"></i>
                  <div class="info-text">
                    <a href="mailto:info@domain.com">
                      <span>Mail Us</span>
                      aryabhattinstitute.alw@gmail.com

                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="logo-area text-center" style="margin-top:0px">
                <img src="aryabhatt/images/ABC1.png" alt="logo" height="70" width="120">
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="header-contact pull-right">
                <div id="phone-details" class="widget-text">
                  <i class="glyph-icon flaticon-phone-call"></i>
                  <div class="info-text">
                    <a href="tel:4155551234">
                      <span>Call Us</span>
                      +91 - 9414403459, 9474427840
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header Top End -->

      <!-- Menu Start -->
      <div class="menu-area menu-sticky">
        <div class="container">
          <div class="main-menu">
            <div class="row">
              <div class="col-sm-12">

                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                <nav class="rs-menu">
                  <ul class="nav-menu">
                    <!-- Home -->
                    <li class="current-menu-item current_page_item menu-item-has-children"> <a
                        href="<?php Url::home()?>" class="home">Home</a>

                    </li>
                    <!-- End Home -->

                    <!--About Menu Start-->
                    <li class="menu-item-has-children"> <a href="<?php echo Url::to('/site/about', true) ?>">About
                        Us</a>

                    </li>
                    <!--About Menu End-->

                    <!-- Drop Down Pages Start -->
                    <li class="rs-mega-menu mega-rs"> <a href="> <a href="
                        <?php echo Url::to('/site/exams', true) ?>">Exams</a>

                    </li>
                    <!--Drop Down Pages End -->

                    <!--Courses Menu Start-->
                    <li class="menu-item-has-children"> <a href="#">Online Test Series</a>

                    </li>
                    <!--Courses Menu End-->

                    <!--Events Menu Start-->
                    <li class="menu-item-has-children"> <a href="#">Online Courses</a>

                    </li>
                    <!--Events Menu End-->

                    <!-- Drop Down -->
                    <li class="menu-item-has-children"> <a href="#">Current Affairs</a>

                    </li>
                    <!--End Icons -->

                    <!--blog Menu Start-->
                    <!--	<li class="menu-item-has-children"> <a href="#">Blog</a>
												<ul class="sub-menu">
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-details.html">Blog Details</a></li>
												</ul>
											</li>
											<!--blog Menu End-->

                    <!--Contact Menu Start-->
                    <li> <a href="contact.html">Contact</a></li>
                    <!--Contact Menu End-->
                  </ul>
                </nav>
                <!-- <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                    </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->
    </header>
    <!--Header End-->

  </div>
  <!--Full width header End-->

  <!-- Slider Area Start -->
  <div id="rs-slider" class="slider-overlay-2">
    <div id="home-slider">
      <!-- Item 1 -->
      <div class="item active">
        <img src="aryabhatt/images/slider/home1/Slider4.jpg" alt="Slide1" />
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">
                  <p style="text-align: right;"> WELCOME TO ARYABHATT INSTITUTE</p>
                </h1>
                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                  <p style="text-align: right;">SSC: (CGL, 10+2, MTS, STENO) RAILWAY: (NTPC, GROUP-D) IBPS: (PO, SO,
                    CLERK, RRB OFFICER) </p> <br class="hidden-sm-dow">
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="item">
        <img src="aryabhatt/images/slider/home1/Slider5.jpg" alt="Slide2" />
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 style="text-align: right" class="slider-title" data-animation-in="fadeInUp"
                  data-animation-out="animate-out"> Welcome to Aryabhatt Institute</h1>
                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                  <p style="text-align: right;">SSC: (CGL, 10+2, MTS, STENO) RAILWAY: (NTPC, GROUP-D) IBPS: (PO, SO,
                    CLERK, RRB OFFICER) </p> <br class="hidden-sm-dow">
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="item">
        <img src="aryabhatt/images/slider/home1/Slider6.jpg" alt="Slide3" />
        <div class="slide-content">
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container text-center">
                <h1 style="text-align: right" class="slider-title" data-animation-in="fadeInUp"
                  data-animation-out="animate-out"> Welcome To Aryabhatt Institute</h1>
                <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">
                  <p style="text-align: right;">SSC: (CGL, 10+2, MTS, STENO) RAILWAY: (NTPC, GROUP-D) IBPS: (PO, SO,
                    CLERK, RRB OFFICER) </p> <br class="hidden-sm-dow">
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Slider Area End -->



  <!-- Team start -->
  <div id="rs-team-2" class="rs-team-2 team-page sec-spacer">
    <div class="container">
      <h1>Exams</h1>
      <div class="gridFilter">
        <button class="active" data-filter="*">ALL </button>
        <button data-filter=".filter1">BANKING</button>
        <button data-filter=".filter2">SSC</button>
        <button data-filter=".filter3">RAILWAY </button>
        <button data-filter=".filter4">INSURANCE</button>
        <button data-filter=".filter5">STATE POLICE</button>
        <button data-filter=".filter6">TEACHING</button>
        <button data-filter=".filter7">ENGINEERING ENTRANCE</button>
        <button data-filter=".filter8">OTHER GOVT. EXAMS</button>

      </div>
      <div class="row grid">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter1">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/RBI.jpg" alt="" /></a>
            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">RBI</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter2">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/SBI.jpg" alt="SBI EXAMS" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">SBI</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter3">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/IBPS.jpg" alt="" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">IBPS</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter4">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/SSC.jpg" alt="" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">SSC</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter1">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/Indian_Railway.jpg" alt="" /></a>
            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">INDIAN RAILWAY</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter2">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/Delhi_Police.jpg" alt="" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">DELHI POLICE</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter3">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/Rajasthan_Police.jpg" alt=""
                  class="responsive" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">RAJASTHAN POLICE</h3>
              </a>
              <span class="designation">Entrance Exam</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 grid-item filter4">
          <div class="team-item">
            <div class="team-img">
              <a href="#"><img class="responsive" src="aryabhatt/images/teachers/RPSC.jpg" alt="" /></a>

            </div>
            <div class="team-body">
              <a href="teachers-single.html">
                <h3 class="name">RPSC</h3>
              </a>
              <span class="designation">Entrance Exams</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Team End -->

  <!-- About Us Start -->
  <div id="rs-about" class="rs-about sec-spacer">
    <div class="container">
      <div class="sec-title mb-50 text-center">
        <h2>ABOUT US</h2>
        <p style="text-align: justify;">Welcome to Aryabhatt Institute, centre of competitive excellence. We provide
          quality coaching for students appearing for various competitive exams for jobs as well as college entrances.
          We specialize in test preparation for SSC CGL, CHSL, CPO, MTS, STENO, RPSC, FCI, CDS, NDA, Railway, RP, DP,
          PO-CLERK in various Banks and Government Jobs.Our instructors teach through a specially designed course with
          inputs from subject experts to ensure that you stand out among your competitors. Our team will tell you what
          to expect and how to excel. We’ll impart you the skills you need to demonstrate your potential when applying
          to a course that will define your future As you know Aryabhatt invented zero, the same way we start teaching
          from zero level and take you to level of SSC CGL/PO. Our motto is to mentor, motivate and guide our students
          and all those who interact with us in order to enable them to make the right career decisions. Aryabhatt
          Institute was established in 1999.Thousands of students have got their dream job since then. Dejected and
          deprived students from the whole Rajasthan come here and get selected for government job. Some of them work
          to earn their living and join coaching in free time. Our assets are our faculty, Aryabhatt’s highly
          competent faculties led by founders Mr. Rajesh Sharma is the real force behind the stupendous success of the
          institute.</p>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="about-img rs-animation-hover">
            <img class="responsive" src="aryabhatt/images/about/about.jpg" alt="img02" />
            <a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=MXktUyJ5f-M"
              title="Video Icon">
            </a>
            <div class="overly-border"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="about-desc">
            <h3>WELCOME TO ARYABHATT</h3>

          </div>
          <div id="accordion" class="rs-accordion-style1">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                  aria-controls="collapseOne">
                  Our History
                </h3>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" style="text-align: justify;">
                  Aryabhatt Institute is one of the largest and fast growing e-learning company in India focused on
                  helping unemployed youth in getting jobs. This is a complete online exam preparation hub for all
                  competitive exams in India.

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  Our Mission
                </h3>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  To bring out the extraordinary in an ordinary aspirant and to ensure the highest possible selection
                  ratio by taking the art of preparing for competitive examinations to the level of a science.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header mb-0" id="headingThree">
                <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">
                  Our Vision
                </h3>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  To establish the brand Aryabhatt’s as a national level institute and to make it a force to reckon
                  with in the field of education by means of serving the students with the highest ethical standards.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Start -->
  <footer id="rs-footer" class="bg3 rs-footer">
    <div class="container">
      <!-- Footer Address -->
      <div>
        <div class="row footer-contact-desc">
          <div class="col-md-4">
            <div class="contact-inner">
              <i class="fa fa-map-marker"></i>
              <h4 class="contact-title">Address</h4>
              <p class="contact-desc">
                <font color="red" size="4"> Aryabhatt Institute:</font> Scheme No 8, Near Indira Gandhi Stadium, Alwar
                (Raj.)
                <br />
                <font color="red" size="4">ABC Institute:</font> Near Nayabass Govt. School, Old RTO Office Road,
                Alwar (Raj.)

              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-inner">
              <i class="fa fa-phone"></i>
              <h4 class="contact-title">Phone Number</h4>
              <p class="contact-desc">
                +91 - 9414403459<br>
                +91 - 9474427840
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-inner">
              <i class="fa fa-map-marker"></i>
              <h4 class="contact-title">Email Address</h4>
              <p class="contact-desc">
                aryabhattinstitute.alw@gmail.com<br>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="about-widget">
              <img src="aryabhatt/images/ABC1.png" height="200px" width="200px" lt="Footer Logo">
              <p>ABC Institute is one of the largest and fast growing e-learning company in India focused on helping
                unemployed youth in getting jobs. </p>
              <p class="margin-remove">This is a complete online exam preparation hub for all competitive exams in
                India. </p>
            </div>
          </div>

          <div class="col-lg-9 col-md-12">
            <h5 class="footer-title">OUR SITEMAP</h5>
            <ul class="sitemap-widget">
              <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
              </li>
              <li><a href="about.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About Us</a></li>
              <li><a href="courses.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Exams</a></li>
              <li><a href="courses-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Test
                  Series</a></li>
              <li><a href="events.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Online Course</a></li>
              <li><a href="events-details.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Current
                  Affairs</a></li>
              <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>

            </ul>
          </div>

        </div>
        <div class="footer-share">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <div class="copyright">
          <p>© aryabhattinstitute.com <?php echo date('Y'); ?></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- start scrollUp  -->
  <div id="scrollUp">
    <i class="fa fa-angle-up"></i>
  </div>

  <!-- Canvas Menu start -->
  <nav class="right_menu_togle">
    <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
    <div class="canvas-logo">
      <a href="index.html"><img src="aryabhatt/images/logo-white.png" alt="logo"></a>
    </div>
    <ul class="sidebarnav_menu list-unstyled main-menu">
      <!--Home Menu Start-->
      <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
        <ul class="list-unstyled">
          <li class="sub-nav active"><a href="index.html">Home One<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--Home Menu End-->

      <!--About Menu Start-->
      <li class="menu-item-has-children"><a href="#">About Us</a>
        <ul class="list-unstyled">
          <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--About Menu End-->

      <!--Pages Menu Start-->
      <li class="menu-item-has-children"><a href="#">Pages</a>
        <ul class="list-unstyled">
          <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span
                class="icon"></span></a></li>
          <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--Pages Menu End-->

      <!--Courses Menu Star-->
      <li class="menu-item-has-children"><a href="#">Courses</a>
        <ul class="list-unstyled">
          <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--Courses Menu End-->

      <!--Events Menu Star-->
      <li class="menu-item-has-children"><a href="#">Events</a>
        <ul class="list-unstyled">
          <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--Events Menu End-->

      <!--blog Menu Star-->
      <li class="menu-item-has-children"><a href="#">Blog</a>
        <ul class="list-unstyled">
          <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
          <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
        </ul>
      </li>
      <!--blog Menu End-->
      <li><a href="contact.html">Contact<span class="icon"></span></a></li>
    </ul>
    <div class="search-wrap">
      <label class="screen-reader-text">Search for:</label>
      <input type="search" placeholder="Search..." name="s" class="search-input" value="">
      <button type="submit" value="Search"><i class="fa fa-search"></i></button>
    </div>
  </nav>
  <!-- Canvas Menu end -->

  <!-- Search Modal Start -->
  <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="search-block clearfix">
          <form>
            <div class="form-group">
              <input class="form-control" placeholder="eg: Computer Technology" type="text">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
$this->endBody()
?>
</body>

</html>
<?php $this->endPage()?>