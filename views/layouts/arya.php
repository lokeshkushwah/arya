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
  

   

    <?=Alert::widget()?>
  
  <?=$content?>



  <?php
//$this->registerCss($content);
$this->endBody()
?>
</body>

</html>
<?php $this->endPage()?>