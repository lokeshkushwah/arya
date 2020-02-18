<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Exams';
$this->params['breadcrumbs'][] = $this->title;
$users = Yii::$app->user->id;

?>
<div class="site-about">
  <h1><?=Html::encode($this->title)?></h1>

  <div class="col-md-12">
    <caption> <b>Note : </b>You are register for the following exams.</caption>
    <table class="table table-striped table-bordered">


      <tr class="info">

        <td><b> S.No</b></td>

        <td><b> Exam Name</b></td>
        <td><b>Date/Time</b></td>


        <td><b>Result </b> </td>
      </tr>

      <?php

$viewExams = \app\models\Exam::find()->limit(100)->orderBy('id DESC')->all();
$abc = 1;
foreach ($viewExams as $exx) {
    // var_dump($exx);
    // die();
    ?>
      <tr class="warning">
        <td><?php echo $abc; ?></td>
        <td><a
            href="<?php echo \yii\helpers\Url::to(['examination/test', 'exam' => $exx->exam_title]); ?>"><?php echo ucfirst($exx->exam_title); ?></a>
        </td>
        <td><?php echo $exx->start; ?></td>

        <td>
          <?php
if (!$users == '') {
        ?>

          <a href="<?php echo \yii\helpers\Url::to(['examination/result', 'exam' => $exx->exam_title]); ?>">Show</a>
        </td>

        <?php
} else {?>
        <a href="<?php echo \yii\helpers\Url::to(['site/login']); ?>">Login</a> </td>
        <?php	}
    ?>
      </tr>
      <?php
$abc++;
}
?>
      <tr>

      </tr>
    </table>
  </div>


</div>