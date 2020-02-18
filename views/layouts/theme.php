<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\ThemeAsset;
use app\widgets\Alert;
//use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
ThemeAsset::register($this);
$users = Yii::$app->user->id;
if ($users != '') {
    $role = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
    //  var_dump($role);
    // var_dump(array_key_exists('admin',$role));
    // $role['Super Admin']->name; //Super Admin,institute,admin,user create
}
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

<body>
  <?php $this->beginBody()?>
  <!-- Site top Start -->
  <div id="tl-site-top" class="tl-site-top">
    <div id="tl-topbar" class="tl-topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ml-lg-auto">
            <div class="tl-topbar-menu float-lg-right">
              <ul class="unstyled list-inline">
                <li><a href="<?php echo \yii\helpers\Url::toRoute('/site/contact', true); ?>">Have Any Question?</a>
                </li>
                <li><a href="<?php echo \yii\helpers\Url::toRoute('/site/contact', true); ?>">Go For Admissions Without
                    Any Race</a></li>
                <li class="tl-user-form">
                  <?php
if ($users != '') {
    ?>
                  <?php
if (array_key_exists('Super Admin', $role) || array_key_exists('admin', $role)) {
        ?>
                  <a class="" href="<?php echo \yii\helpers\Url::to('/admin-dashboard'); ?>"
                    data-method="post">Admin-Dashboard</a>
                  <?php }
    ?>
                  <a class="" href="<?php echo \yii\helpers\Url::to('/site/logout'); ?>" data-method="post">Logout</a>
                  <?php
} else {
    ?>
                  <a class="" href="<?php echo \yii\helpers\Url::to('/site/signup'); ?>" data-method="post">Register
                  </a>
                  <a class="" href="<?php echo \yii\helpers\Url::to('/site/login'); ?>" data-method="post">Login</a>
                  <?php }?>
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
      </div> <!-- Container End -->
    </div>
    <header id="tl-header" class="tl-header">
      <div class="tl-logo-area">
        <div class="container">
          <div class="row align-items-lg-center">
            <div class="col-lg-2">
              <div class="tl-logo">
                <a href="<?php echo \yii\helpers\Url::home(); ?>"><img
                    src="<?php echo \yii\helpers\Url::home(); ?>images/logos/logo.png" alt="" class="mg-fluid"></a>
              </div>
            </div> <!-- Col End -->
            <div class="col-lg-7 ml-auto">
              <div class="header-info">
                <ul class="unstyled list-inline top-info">
                  <li>
                    <span class="info-icon"><i class="icon icon-telephone"></i></span>
                    <div class="info-wrapper">
                      <p class="info-title"> +91 - 9414403459, 9474427840</p>
                      <p class="info-subtitle">aryabhattinstitute.alw@gmail.com</p>
                    </div> <!-- Info wrapper end -->
                  </li> <!-- Li end -->
                  <li>
                    <span class="info-icon"><i class="icon icon-location-pin"></i></span>
                    <div class="info-wrapper">
                      <p class="info-title">Scheme No 8,</p>
                      <p class="info-subtitle">Near Indira Gandhi Stadium, Alwar (Raj.) </p>
                    </div> <!-- Info wrapper end -->
                  </li> <!-- Li end -->
                  <li>
                    <span class="info-icon"><i class="icon icon-time"></i></span>
                    <div class="info-wrapper">
                      <p class="info-title">07:00 - 05:00</p>
                      <p class="info-subtitle">Monday to Saturday</p>
                    </div> <!-- Info wrapper end -->
                  </li> <!-- Li end -->
                </ul> <!-- Top info end -->
              </div> <!-- Header Info End -->
            </div> <!-- Col End -->
            <div class="col-lg-2">
              <a href="<?php echo \yii\helpers\Url::to(['/site/contact', true]); ?>"
                class="btn btn-primary btn-md">enquire now</a>
            </div> <!-- Col End -->
          </div> <!-- Row End -->
        </div> <!-- Container end -->
      </div>
      <div class="site-navigation" data-toggle="affix">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <i class="icon icon-menu"></i>
              </span>
            </button><!-- End of Navbar toggler-->
            <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">


              <ul class="navbar-nav ">
                <li class="nav-item dropdown"><a class="nav-link"
                    href="<?php echo \yii\helpers\Url::home(); ?>">Home</a></li>
                <li class="nav-item dropdown"><a class="nav-link"
                    href="<?php echo \yii\helpers\Url::to('/site/exams'); ?>">Quick-Exam</a></li>

                <?php
if ($users != '') {
    if (array_key_exists('Super Admin', $role) || array_key_exists('admin', $role)) {
        ?>
                <li class="nav-item dropdown ">
                  <a class="nav-link" href="<?php echo \yii\helpers\Url::home(); ?>" data-toggle="dropdown">
                    Organized Paper
                    <span class="nav-indicator">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to(['/subject', true]); ?>">Subject</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to(['/question', true]); ?>">Question</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to(['/batch', true]); ?>">Institute</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to(['/exam', true]); ?>">Exam</a></li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to(['/exam-user', true]); ?>">User</a>
                    </li>

                  </ul>
                </li><!-- li end-->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown">
                    Administrator
                    <span class="nav-indicator">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to('/user-admin'); ?>">User
                        Management</a></li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to('/user-admin/exam-results'); ?>"> User
                        Results</a></li>

                  </ul>
                </li><!-- li end-->

                <?php }
}
?>


                <?php
if ($users != '') {
    if (array_key_exists('institute', $role)) {

        ?>

                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown">
                    Learners
                    <span class="nav-indicator">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="nav-item"><a
                        href="<?php echo \yii\helpers\Url::to('/site/register-user'); ?>">Register</a></li>
                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to('/site/user-list'); ?>">View/Edit
                        Users </a></li>

                    <li class="nav-item"><a href="<?php echo \yii\helpers\Url::to('/site/exam-results'); ?>"> Institute
                        Results</a></li>


                  </ul>
                </li><!-- li end-->

                <?php }
}
?>

                <?php if ($users == '') {?>
                <li class="nav-item dropdown"><a class="nav-link"
                    href="<?php echo \yii\helpers\Url::to('/site/signup'); ?>" data-method="post">Register</a></li>
                <!-- li end-->
                <?php } else {
    ?>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown">
                    <?php echo 'Hi-' . ucwords(\Yii::$app->user->identity->username) ?>
                    <span class="nav-indicator">
                      <i class="fa fa-angle-down"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="nav-item dropdown"> <a class="nav-link"
                        href="<?php echo \yii\helpers\Url::to('/site/user-results'); ?>" data-method="post">View
                        Results</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link"
                        href="<?php echo \yii\helpers\Url::to('/site/updateuser'); ?>" data-method="post">Change
                        Password</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link"
                        href="<?php echo \yii\helpers\Url::to('/site/logout'); ?>" data-method="post">Logout</a></li>
                  </ul>
                </li>
                <?php
}
?>
                <li class="nav-item dropdown"><a class="nav-link"
                    href="<?php echo \yii\helpers\Url::toRoute('/site/contact', true); ?>">Contact</a></li>
                <!-- li end-->
              </ul>
              <!--Nav ul end-->
            </div> <!-- Navbar Collapse End -->
          </nav> <!-- Nav End -->
        </div> <!-- Container end -->
      </div>
    </header>
  </div>
  <!-- Site top End -->



  <?php
if (Yii::$app->controller->route == 'site/index') {
    ?>
  <!-- Carousel Start -->
  <div id="tl-slider" class="tl-slider hidden-xs">
    <div class="tl-slider-carousel owl-carousel">
      <div class="tl-slider-wrapper"
        style="background-image: url(<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-bg1.jpg)">
        <div class="slider-inner">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="slider-content">
                  <h1 class="slider-title">Your Child Is Our Asset</h1>
                  <p class="slider-text">
                    We have 20 years Experience on this profession. it is pleasure, but because those who do not know
                    how to pursue pleasure rationally encounter consequences that are extremely painful.
                  </p> <!-- Slider text end -->
                  <div class="slider-btn">
                    <a href="#" class="btn btn-primary btn-lg">Contact Us today</a>
                    <a href="#" class="btn btn-border">Enrol Now</a>
                  </div> <!-- Slider btn end -->
                </div> <!-- Slider Content end -->
              </div> <!-- COl End -->
            </div> <!-- Row End -->
            <div class="slider-img">
              <span><img src="<?php echo \yii\helpers\Url::home(); ?>images/slider/slider-img1.png" alt=""
                  class="img-fluid"></span>
            </div> <!-- Slider img end -->
          </div> <!-- Container end -->
        </div> <!-- Slider Inner end -->
      </div> <!-- Slider Wrapper end -->

    </div> <!-- Slider Carousel end -->
  </div>
  <!-- Carousel End -->
  <?php
} else {

}
?>

  <div>
    <style>
    .fade:not(.show) {
      //  opacity: 1
    }
    </style>

    <?=Alert::widget()?>
  </div>
  <?=$content?>



  <!-- Footer Area Start -->
  <footer id="tl-footer" class="tl-footer">
    <div id="tl-footer-info" class="tl-footer-info">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <h3 class="footer-title">Get in Touch
              <span>We always here for help you</span>
            </h3> <!-- Footer Title End -->
          </div> <!-- Col end -->
          <div class="col-lg-3">
            <div class="footer-contact-info color-yellow">
              <i class="icon icon-location-pin"></i>
              <h3>Get Appointment</h3>
              <p>8:00 AM - 4:00 PM</p>
            </div> <!-- Footer contact info end -->
          </div> <!-- Col end -->
          <div class="col-lg-3">
            <div class="footer-contact-info color-green">
              <i class="icon icon-phone"></i>
              <h3>Contact Us Today</h3>
              <p>(+09) 042 903493</p>
            </div> <!-- Footer contact info end -->
          </div> <!-- Col end -->
          <div class="col-lg-3"">
                            <div class=" footer-contact-info color-orange">
            <i class="icon icon-hourglass"></i>
            <h3>Take a School Tour</h3>
            <p>Go to our blog</p>
          </div> <!-- Footer contact info end -->
        </div> <!-- Col end -->
      </div> <!-- Row End -->
    </div> <!-- Container end -->
    </div> <!-- Footer Info End -->
    <div id="tl-footer-main" class="tl-footer-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-logo">
              <a href="#"><img src="<?php echo \yii\helpers\Url::home(); ?>images/logos/logo.png" alt=""
                  class="mg-fluid"></a>
              <p>I will give you a complete account of the system, and expound.</p>
            </div> <!-- Footer logo end -->
            <div class="footer-contact-details">
              <ul class="unstyled">
                <li><strong>Phone :</strong> (+91) 9414403459, 9474427840</li>
                <li><strong>Email :</strong> aryabhattinstitute.alw@gmail.com</li>

              </ul> <!-- List end -->
            </div> <!-- Footer contact details end -->
            <div class="footer-scoial-links">
              <ul class="unstyled list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
              </ul> <!-- list end -->
            </div> <!-- footer social end -->
          </div> <!-- COl end -->
          <div class="col-lg-3 col-md-6">
            <h3 class="main-footer-title">Get in Touch</h3>
            <div class="bottom-menu menu-half">
              <p>
                <strong>Aryabhatt Institute :</strong> : Scheme No 8, Near Indira Gandhi Stadium, Alwar
                (Raj.)

                <br /> <strong>ABC Institute :</strong> : Near Nayabass Govt. School, Old RTO Office Road, Alwar
                (Raj.)

              </p> <!-- list end -->
            </div> <!-- Bottom menu end -->
          </div> <!-- COl end -->
          <div class="col-lg-3 col-md-6">
            <h3 class="main-footer-title">Short Programmes</h3>
            <div class="bottom-menu">
              <ul class="unstyled border-bottom-dashed">
                <li><a href="#">Part-time programmes</a></li>
                <li><a href="#">Full-time programmes</a></li>
                <li><a href="#">Summer Programmes</a></li>
                <li><a href="#">Special Language</a></li>
                <li><a href="#">Deep Level Programmes</a></li>
              </ul> <!-- list end -->
            </div> <!-- bottom menu end -->
          </div> <!-- col end -->
          <div class="col-lg-3 col-md-6">
            <h3 class="main-footer-title">Recent Courses</h3>
            <div class="course-container">
              <ul class="unstyled course-list">
                <li>
                  <a href="#">
                    <img src="<?php echo \yii\helpers\Url::home(); ?>images/course/course-small-img1.jpg" alt=""
                      class="img-fluid">
                    <h6>Start Summer Language Club</h6>
                  </a>
                </li> <!-- li end -->
                <li>
                  <a href="#">
                    <img src="<?php echo \yii\helpers\Url::home(); ?>images/course/course-small-img2.jpg" alt=""
                      class="img-fluid">
                    <h6>Start Summer Language Club</h6>
                  </a>
                </li> <!-- li end -->
                <li>
                  <a href="#">
                    <img src="<?php echo \yii\helpers\Url::home(); ?>images/course/course-small-img3.jpg" alt=""
                      class="img-fluid">
                    <h6>Start Summer Language Club</h6>
                  </a>
                </li> <!-- li end -->
              </ul> <!-- list end -->
            </div> <!-- course container end -->
          </div> <!-- col end -->
        </div> <!-- Row End -->
      </div> <!-- Container end -->
    </div><!-- Footer Mian end -->
  </footer>
  <!-- Footer Area End -->

  <!-- Copyright Area Start -->
  <footer id="tl-copyright" class="tl-copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <p class="copyright-text">&copy; <?=date('Y')?> Aryabhatt Institute</p>
        </div> <!-- Col End -->
        <div class="col-lg-3 ml-lg-auto text-lg-right">
          <div class="copyright-menu">
            <ul class="unstyled list-inline">
              <li><a href="#">Unsubscribe</a></li>
              <li><a href="#">Subscribe</a></li>
            </ul> <!-- List end -->
          </div> <!-- Copyright menu end -->
        </div> <!-- Col End -->
      </div> <!-- Row End -->
    </div> <!-- Container end -->
  </footer>
  <!-- Copyright Area End -->

  <div class="back-to-top" id="back-to-top" data-offset-top="10">
    <button class="btn btn-primary" title="Back to Top">
      <i class="fa fa-angle-double-up"></i><!-- icon end-->
    </button><!-- button end-->
  </div>




  <?php
//$this->registerCss($content);
$this->endBody()
?>
</body>

</html>
<?php $this->endPage()?>