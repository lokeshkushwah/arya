<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AryaAsset;
use app\widgets\Alert;
//use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
AryaAsset::register($this);
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

<body  id="mobile_wrap">
  <?php $this->beginBody()?>
    <div class="statusbar-overlay"></div>

    <div class="panel-overlay"></div>
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


   

    <?=Alert::widget()?>
  
  <?=$content?>



  <div class="panel panel-left panel-reveal">
	<div class="view view-subnav">
	<div class="pages">
		<div data-page="panel-leftmenu" class="page pagepanel">	
                     <div class="page-content">
			<nav class="main_nav_underline">
			<ul>
			<li><a href="index.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/home.png" alt="" title="" /><span>Home</span></a></li>
			<li><a href="about.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/mobile.png" alt="" title="" /><span>About</span></a></li>
		<!--	<li><a href="features.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/features.png" alt="" title="" /><span>Features</span></a></li>-->
			
			<li><a href="#" data-popup=".popup-login" class="open-popup close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Login</span></a></li>
			<li><a href="team.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/users.png" alt="" title="" /><span>Team</span></a></li>
			<li><a href="blog.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/blog.png" alt="" title="" /><span>Private Policy</span></a></li>		

			<li><a href="photos.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/photos.png" alt="" title="" /><span>Photos</span></a></li>
			<li><a href="videos.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/video.png" alt="" title="" /><span>Videos</span></a></li>
			<li><a href="music.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/music.png" alt="" title="" /><span>Music</span></a></li>
			<!--
			<li><a href="shop.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/shop.png" alt="" title="" /><span>Shop</span></a></li>
			<li class="subnav"><a href="categories.html"><img src="images/icons/white/categories.png" alt="" title="" /><span>Sub level menu</span></a></li>
			<li><a href="cart.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/cart.png" alt="" title="" /><span>Cart</span></a></li>
			
			<li><a href="tables.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/tables.png" alt="" title="" /><span>Tables</span></a></li>
			<li><a href="chat.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/message.png" alt="" title="" /><span>Chat messages</span></a></li>
			<li><a href="form.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/form.png" alt="" title="" /><span>Custom Form</span></a></li>
      -->
			
			<li><a href="tel:91-9414403459" class="close-panel external" data-view=".view-main"><img src="images/icons/white/phone.png" alt="" title="" /><span>Call now!</span></a></li>
			<li><a href="contact.html" class="close-panel" data-view=".view-main"><img src="images/icons/white/contact.png" alt="" title="" /><span>Contact</span></a></li>
			</ul>
			</nav>
                     </div>
		</div>
	  </div>
	</div>  
    </div>

    <div class="panel panel-right panel-reveal">
      <div class="user_login_info">
	  
                <div class="user_thumb">
                <img src="images/page_photo.jpg" alt="" title="" />
                  <div class="user_details">
                   <p>Welcome, <span>Nathalie</span></p>
                  </div>  
                  <div class="user_avatar"><img src="images/avatar.jpg" alt="" title="" /></div>       
                </div>
				
                  <nav class="user-nav">
                    <ul>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/settings.png" alt="" title="" /><span>Account Settings</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/briefcase.png" alt="" title="" /><span>My Account</span></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/message.png" alt="" title="" /><span>Messages</span><strong>12</strong></a></li>
                      <li><a href="features.html" class="close-panel"><img src="images/icons/white/love.png" alt="" title="" /><span>Favorites</span><strong>5</strong></a></li>
                      <li><a href="index.html" class="close-panel"><img src="images/icons/white/lock.png" alt="" title="" /><span>Logout</span></a></li>
                    </ul>
                  </nav>
      </div>
    </div>

    <div class="views">

      <div class="view view-main">



        <div class="pages">

          <div data-page="index" class="page homepage">
            <div class="page-content">
			
			    <div class="navbarpages">
					<div class="navbar_left">
						<div class="logo_text"><a href="index.html">आर्यभट्ट संस्थान</a></div>
					</div>
					<div class="navbar_right navbar_right_menu">
					<a href="#" data-panel="left" class="open-panel"><img src="images/icons/white/menu.png" alt="" title="" /></a>
					</div>			
					<div class="navbar_right">
					<a href="#" data-panel="right" class="open-panel"><img src="images/icons/white/user.png" alt="" title="" /></a>
					</div>
					
                </div>

                  <!-- Slider -->
                 <div class="swiper-container slidertoolbar swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination"  data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
                    <div class="swiper-wrapper">
                    
                      <div class="swiper-slide" style="background-image:url(images/slider1.jpg);">
		     <div class="slider_trans">
			 <div class="slider-caption">
			          <span class="subtitle" data-swiper-parallax="-60%">काक चेष्टा, बको ध्यानं,स्वान निद्रा तथैव च। अल्पहारी,गृहत्यागी,विद्यार्थी पंच लक्षणं॥</span>
				  <h2 data-swiper-parallax="-100%">सरकारी भर्ती परीक्षाओं की तैयारी करें </h2>
				  
				  <p data-swiper-parallax="-30%">दिल्ली पुलिस, ग्राम सेवक, पटवारी, राजस्थान पुलिस(S.I.), ONLINE TEST SERIES.</p>
			 </div>
		      </div> 
                       </div>
                      <div class="swiper-slide" style="background-image:url(images/slider2.jpg);">
			<div class="slider_trans">		  
				<div class="slider-caption">
				<span class="subtitle" data-swiper-parallax="-60%">काक चेष्टा, बको ध्यानं,स्वान निद्रा तथैव च। अल्पहारी,गृहत्यागी,विद्यार्थी पंच लक्षणं॥</span>
				<h2 data-swiper-parallax="-100%">सरकारी भर्ती परीक्षाओं की तैयारी करें</h2>
				
				<p data-swiper-parallax="-30%">दिल्ली पुलिस, ग्राम सेवक, पटवारी, राजस्थान पुलिस(S.I.), ONLINE TEST SERIES.</p>
				</div>	
			</div>	
                      </div>
                      <div class="swiper-slide" style="background-image:url(images/slider3.jpg);">
			<div class="slider_trans">		  
				<div class="slider-caption">
				<span class="subtitle" data-swiper-parallax="-60%">काक चेष्टा, बको ध्यानं,स्वान निद्रा तथैव च। अल्पहारी,गृहत्यागी,विद्यार्थी पंच लक्षणं॥</span>
				<h2 data-swiper-parallax="-100%">सरकारी भर्ती परीक्षाओं की तैयारी करें</h2>
				
				<p data-swiper-parallax="-30%">दिल्ली पुलिस, ग्राम सेवक, पटवारी, राजस्थान पुलिस(S.I.), ONLINE TEST SERIES.</p>
				</div>
                       </div>
		   </div> 		   
                    </div>
                    <div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>	
                  </div>
			  
		 <div class="swiper-container-toolbar swiper-toolbar swiper-init" data-effect="slide" data-slides-per-view="1" data-slides-per-group="1" data-space-between="0" data-pagination=".swiper-pagination-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
				<a href="about.html" data-view=".view-main"><img src="images/icons/blue/users.png" alt="" title="" /><span>ABOUT</span></a>
			        <a href="Notification.html" data-view=".view-main"><img src="images/icons/blue/features.png" alt="" title="" /><span>EXAMS</span></a>
				<a href="#" data-popup=".popup-login" class="open-popup"><img src="images/icons/blue/lock.png" alt="" title="" /><span>LOGIN</span></a>
				<a href="blog.html" data-view=".view-main"><img src="images/icons/blue/blog.png" alt="" title="" /><span>PRIVATE POLICY</span></a>
				<a href="photos.html" data-view=".view-main"><img src="images/icons/blue/photos.png" alt="" title="" /><span>PHOTOS</span></a>
				<a href="contact.html" data-view=".view-main"><img src="images/icons/blue/contact.png" alt="" title="" /><span>CONTACT</span></a>
			  </div> 
			  <div class="swiper-slide toolbar-icon">
				  <a href="shop.html" data-view=".view-main"><img src="images/icons/blue/shop.png" alt="" title="" /><span>SHOP</span></a>
				  <a href="music.html" data-view=".view-main"><img src="images/icons/blue/music.png" alt="" title="" /><span>MUSIC</span></a>
				  <a href="form.html" data-view=".view-main"><img src="images/icons/blue/form.png" alt="" title="" /><span>CUSTOM FORM</span></a>
				  <a href="#" data-popup=".popup-social" class="open-popup"><img src="images/icons/blue/twitter.png" alt="" title="" /><span>SOCIAL</span></a>
				  <a href="videos.html" data-view=".view-main"><img src="images/icons/blue/video.png" alt="" title="" /><span>VIDEOS</span></a>
				  <a href="tel:12345678" class="external"><img src="images/icons/blue/phone.png" alt="" title="" /><span>CALL NOW!</span></a>
			   </div>

			</div>
		  </div>	

			  
            </div>
          </div>
        </div>



      </div>
    </div>

	
    <!-- Login Popup -->
    <div class="popup popup-login">
        <div class="content-block">
            <h4>LOGIN</h4>
            <div class="loginform">
                <form id="LoginForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="username" />
                    <input type="password" name="Password" value="" class="form_input required" placeholder="password" />
                    <div class="forgot_pass"><a href="#" data-popup=".popup-forgot" class="open-popup">Forgot Password?</a></div>
                    <input type="submit" name="submit" class="form_submit" id="submitlogin" value="SIGN IN" />
                </form>
                <div class="signup_bottom">
                    <p>Don't have an account?</p>
                    <a href="#" data-popup=".popup-signup" class="open-popup">SIGN UP</a>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>

    <!-- Register Popup -->
    <div class="popup popup-signup">
        <div class="content-block">
            <h4>REGISTER</h4>
            <div class="loginform">
                <form id="RegisterForm" method="post">
                    <input type="text" name="Username" value="" class="form_input required" placeholder="Username" />
                    <input type="text" name="Email" value="" class="form_input required" placeholder="Email" />
                    <input type="password" name="Password" value="" class="form_input required" placeholder="Password" />
                    <input type="submit" name="submit" class="form_submit" id="submitregister" value="SIGN UP" />
                </form>
		<h5>- OR REGISTER WITH A SOCIAL ACCOUNT -</h5>
		<div class="signup_social">
			<a href="http://www.facebook.com/" class="signup_facebook external">FACEBOOK</a>
			<a href="http://www.twitter.com/" class="signup_twitter external">TWITTER</a>            
		</div>		
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Forgot Password Popup -->
    <div class="popup popup-forgot">
        <div class="content-block">
            <h4>FORGOT PASSWORD</h4>
            <div class="loginform">
                <form id="ForgotForm" method="post">
                    <input type="text" name="Email" value="" class="form_input required" placeholder="email" />
                    <input type="submit" name="submit" class="form_submit" id="submitforgot" value="RESEND PASSWORD" />
                </form>
                <div class="signup_bottom">
                    <p>Check your email and follow the instructions to reset your password.</p>
                </div>
            </div>
            <div class="close_popup_button">
                <a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a>
            </div>
        </div>
    </div>
	
    <!-- Social Icons Popup -->
    <div class="popup popup-social">
    <div class="content-block">
      <h4>Social Share</h4>
      <p>Share icons solution that allows you share and increase your social popularity.</p>
      <ul class="social_share">
      <li><a href="http://twitter.com/" class="external"><img src="images/icons/black/twitter.png" alt="" title="" /><span>TWITTER</span></a></li>
      <li><a href="http://www.facebook.com/" class="external"><img src="images/icons/black/facebook.png" alt="" title="" /><span>FACEBOOK</span></a></li>
      <li><a href="http://plus.google.com" class="external"><img src="images/icons/black/gplus.png" alt="" title="" /><span>GOOGLE</span></a></li>
      <li><a href="http://www.dribbble.com/" class="external"><img src="images/icons/black/dribbble.png" alt="" title="" /><span>DRIBBBLE</span></a></li>
      <li><a href="http://www.linkedin.com/" class="external"><img src="images/icons/black/linkedin.png" alt="" title="" /><span>LINKEDIN</span></a></li>
      <li><a href="http://www.pinterest.com/" class="external"><img src="images/icons/black/pinterest.png" alt="" title="" /><span>PINTEREST</span></a></li>
      </ul>
      <div class="close_popup_button"><a href="#" class="close-popup"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
    </div>
    </div>


  <?php
//$this->registerCss($content);
$this->endBody()
?>
</body>

</html>
<?php $this->endPage()?>