<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
//use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
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

  <div class="wrap">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Online-Exam</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php yii\helpers\Url::to('', true)?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Step1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php yii\helpers\Url::to('amenities', true)?>">Amenities</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>
    <?php
NavBar::begin([
    'brandLabel' => 'Aryabhatt Institute',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
    ],
]);
//              echo Nav::widget([
//    'items' => [
//        [
//            'label' => 'Home',
//            'url' => ['site/index'],
//            'linkOptions' => ['test'],
//        ],
//        [
//            'label' => 'Dropdown',
//            'items' => [
//                 ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
//                 '<li class="divider"></li>',
//                 '<li class="dropdown-header">Dropdown Header</li>',
//                 ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
//            ],
//        ],
//        [
//            'label' => 'Login',
//            'url' => ['site/login'],
//            'visible' => Yii::$app->user->isGuest
//        ],
//    ],
//    'options' => ['class' =>'nav-pills'], // set this to nav-tab to get tab-styled navigation
//]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Home', 'url' => Yii::$app->homeUrl],
        ['label' => 'Exams', 'url' => ['/site/exams']],
        ['label' => 'Privacy Policy', 'url' => ['/site/privacy-policy']],  
        [
            'label' => 'Organized Paper ',
            'items' => [
                ['label' => ' Subject', 'url' => ['/subject']],
                '<li class="divider"></li>',
                ['label' => ' Question', 'url' => ['/question']],
                '<li class="divider"></li>',

                ['label' => ' Create Batch', 'url' => ['/batch']],
                '<li class="divider"></li>',

                ['label' => ' Exam', 'url' => ['/exam']],
                '<li class="divider"></li>',
                ['label' => 'User-Exam', 'url' => ['/exam-user']],
                // '<li class="divider"></li>',
                // ['label' => ' All Result', 'url' => ['examination/result']],
            ],
        ],
        [
            'label' => 'Administrator ',
            'items' => [

                ['label' => ' User Admin', 'url' => ['/user-admin']],
                '<li class="divider"></li>',
                ['label' => ' User Results', 'url' => ['user-admin/exam-results']],
                // '<li class="divider"></li>',
                //
            ],
        ],
        /*                    [
        'label' => 'Step 1',
        'items' => [
        ['label' => '1.1. Amenities', 'url' => ['/amenities']],
        '<li class="divider"></li>',
        ['label' => '1.2. Bank-approval', 'url' => ['/bank-approval']],
        '<li class="divider"></li>',
        ['label' => '1.3 Legal-approval', 'url' => ['/legal-approval']],
        ],
        ],
        [
        'label' => 'Step 2',
        'items' => [
        ['label' => '2.1. State', 'url' => ['/state']],
        '<li class="divider"></li>',
        ['label' => '2.2. City', 'url' => ['/city']],
        '<li class="divider"></li>',
        ['label' => '2.3. Reason', 'url' => ['/reason']],
        '<li class="divider"></li>',
        ['label' => '2.4. Area', 'url' => ['/area']],
        '<li class="divider"></li>',
        ['label' => '2.5. Classification', 'url' => ['/prop-classification']],
        '<li class="divider"></li>',
        ['label' => '2.6. Status', 'url' => ['/prop-status']],
        '<li class="divider"></li>',
        ['label' => '2.7. Type', 'url' => ['/prop-type']],
        '<li class="divider"></li>',
        ['label' => '2.8. Projects', 'url' => ['/projects']],
        '<li class="divider"></li>',
        ],
        ],
        [
        'label' => 'Step 3',
        'items' => [
        ['label' => '3.1. Floor-plan', 'url' => ['/floor-plan']],
        '<li class="divider"></li>',
        ['label' => '3.2. Price', 'url' => ['/price']],
        '<li class="divider"></li>',
        ['label' => '3.3. Image', 'url' => ['/prop-image']],
        '<li class="divider"></li>',
        ['label' => '3.4. Slider', 'url' => ['/prop-slider']],
        '<li class="divider"></li>',
        ['label' => '3.5. Specification', 'url' => ['/specification']],
        '<li class="divider"></li>',
        ],
        ],
        [
        'label' => 'Step 4',
        'items' => [
        ['label' => '4.1. Amenities-projects-relation', 'url' => ['/amenities-projects-relation']],
        '<li class="divider"></li>',
        ['label' => '4.2. Bank-projects-relation', 'url' => ['/bank-projects-relation']],
        '<li class="divider"></li>',
        ['label' => '4.3 Legal-projects-relations', 'url' => ['/legal-projects-relations']],
        '<li class="divider"></li>',
        ['label' => '4.4 Specification-projects-relation', 'url' => ['/specification-projects-relation']],
        ],
        ], */
        // ['label' => 'Contact', 'url' => ['/site/contact']],
        Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>'
        ),
    ],
]);
NavBar::end();
?>

    <div class="container">
      <?=
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>

      <?=$content?>

    </div>

  </div>

  <footer class="footer">
    <div class="container">
      <p class="pull-left">&copy; aryabhattinstitute.com <?=date('Y')?> </p>
      <p><?php
if (Yii::$app->user->id) {
    $c = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
    //  echo  $c['Super Admin']->name;
}
?></p>

      <p class="pull-right"></p>
    </div>
  </footer>

  <?php
//$this->registerCss($content);
$this->endBody()
?>
</body>

</html>
<?php $this->endPage()?>