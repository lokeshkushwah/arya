<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;
use app\widgets\Alert;
use yii\web\View;

HomeAsset::register($this);
if (Yii::$app->user->id != '') {
    $user = Yii::$app->user->id;
} else {
    $user = 0;
}
$user = Yii::$app->user->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php  //$this->registerCsrfMetaTags() ?>

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="main-content" id="home">
            <div class="layer">
                <!-- header -->
                <header>
                    <div class="container-fluid px-lg-5">
                        <div class="row order-info">
                            <div class="middle mt-sm-3 col-sm-6 text-left">
                                <ul class="social mb-3">
                                    <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                                    <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                                </ul>

                            </div>
                            <div class="middle-right mt-sm-3 col-sm-6 text-right">
                                <h6><span class="fa fa-phone"></span> Enquiry : 9414403459,9414427840</h6>
                            </div>
                        </div>
                        <!-- nav -->
                        <nav class="pt-4 d-lg-flex">
                            <div id="logo">
                                <h1> <a href="index.html">ARYABHATT INSTITUTE </a></h1>
                            </div>
                            <label for="drop" class="toggle">Menu</label>
                            <input type="checkbox" id="drop" />
                            <ul class="menu mt-2 ml-auto">
                                <li class="active"><a href="<?php echo yii\helpers\Url::base(true) ?>">Home</a></li>
                                <li><a href="<?php echo yii\helpers\Url::to(['site/exams']) ?>" class="scroll">Exams</a></li>
                                <li><a href="<?php echo yii\helpers\Url::to(['site/privacy-policy']) ?>" class="scroll">Privacy Policy</a></li>
                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Organized Paper <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="#">Organized Paper   <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-ul">
                                        <li><a class="scroll" href="<?php echo yii\helpers\Url::to(['/subject'], TRUE) ?>"> Subject</a></li>
                                        <li><a href="<?php echo yii\helpers\Url::to(['/question'], TRUE) ?>" class="scroll"> Question</a></li>
                                        <li><a href="<?php echo yii\helpers\Url::to(['/batch'], TRUE) ?>" class="scroll"> Create Batch</a></li>
                                        <li><a href="<?php echo yii\helpers\Url::to(['/exam'], TRUE) ?>" class="scroll"> Exam</a></li>  
                                        <li><a href="<?php echo yii\helpers\Url::to(['/exam-user'], TRUE) ?>" class="scroll"> User-Exam</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <!-- First Tier Drop Down -->
                                    <label for="drop-2" class="toggle">Administrator  <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                    <a href="#">Administrator     <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                    <input type="checkbox" id="drop-2" />
                                    <ul class="inner-ul">
                                        <li><a class="scroll" href="<?php echo yii\helpers\Url::to(['/user-admin'], TRUE) ?>">  User Admin</a></li>
                                        <li><a href="<?php echo yii\helpers\Url::to(['/user-admin/exam-results'], TRUE) ?>" class="scroll">  User Results</a></li>

                                    </ul>
                                </li> <li> 
                                <?php
                                if ($user == 0) {
                                    ?>
                                <a href="<?php echo \yii\helpers\Url::to(['/site/login'], TRUE) ?>">Login </a>
                                    <a href="<?php echo \yii\helpers\Url::to(['/site/signup'], TRUE) ?>">Signup </a>

                                    <?php
                                } else {
                                    ?>
 <form class="navbar-form" action="http://aryabhattinstitute.com/site/logout" method="post" style="margin-top:0">
 <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
<button type="submit" class="" style="color: red;
    text-transform: capitalize;
    font-size: 0.9em;
    letter-spacing: 2px;
    padding-left: 0;
    padding-right: 0;
    padding: 0em 1.5em;
    background: transparent;
    font-weight: 400;
}">Logout (<?php echo Yii::$app->user->identity->username; ?>)</button></form>
   <?php
                                }
                                ?>
 </li>
                            </ul>
                        </nav>
                        <!-- //nav -->
                    </div>
                </header>
                <!-- //header -->
                <div class="container">
                    <!-- /banner -->
                   

                </div>
                <!-- //banner -->
            </div>
        </div>

      
        <!-- end .header-top-bar -->


      
   

        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        <!-- footer -->
        <footer class="footer-content">
            <div class="layer footer-1">
                <div class="container-fluid">
                    <div class="row footer-top-inner-w3ls">
                        <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                            <h2>
                                <a href="<?php echo yii\helpers\Url::base(true) ?>">ARYABHATT INSTITUTE</a>
                            </h2>
                            <p class="my-3"> We specialize in test preparation for SSC CGL, CHSL, CPO, MTS, STENO, RPSC, FCI, CDS, NDA, Railway, RP, DP, PO-CLERK in various Banks and Government Jobs.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="footer-w3pvt">
                                <h3 class="mb-3 w3pvt_title">Office Hours</h3>
                                <hr>
                                <ul class="list-info-w3pvt last-w3ls-contact mt-lg-4">
                                    <li>
                                        <p> Monday - Friday 9.00 am - 8.00 pm</p>

                                    </li>
                                    <li class="my-2">
                                        <p>Saturday 9.00 am - 5.00 pm</p>

                                    </li>
                                    <li class="my-2">
                                        <p>Sunday 10.00 am - 2.00 pm</p>

                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                            <div class="footer-w3pvt">
                                <h3 class="mb-3 w3pvt_title">Our Branch</h3>
                                <hr>
                                <img src="<?php echo \yii\helpers\Url::base(TRUE) ?>/home/images/abc.jpg" class="img-responsive">
                                <div class="footer-text">
                                    <p>We have only one branch named as “ABC Institute” run in our own property.</p>
                                   
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <p class="copy-right-grids text-li text-center my-sm-4 my-4">© <?php date('Y') ?> ARYABHATT INSTITUTE. All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
                <div class="w3ls-footer text-center mt-4">
                    <ul class="list-unstyled w3ls-icons">
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
    </div>
</footer>
<!-- //footer -->




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<?php 
