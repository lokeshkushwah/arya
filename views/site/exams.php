<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$users = Yii::$app->user->id;
?>
<br />

<div class="container">
  <h1>Exams & Results</h1>
  <div class="clearfix"></div>
  <div class="row">


    <div class="col-md-6">


      <table class="table table-striped table-bordered">
        <tr class="info">



          <td><b> Exam Name</b></td>
          <td><b>Result</b></td>

        </tr>
        <?php
//   $query = \app\models\ExamUser::find()->where(['user' => Yii::$app->user->id])->orderBy('id DESC')->all();

foreach ($models as $model) {
    //   var_dump($model);
    // die();
    $exam = app\models\Exam::find()->where(['id' => $model['id']])->one();
    ?>
        <tr>

          <td>
            <?php echo '<a href="' . \yii\helpers\Url::to(['examination/test', 'exam' => $exam->exam_title]) . '">' . ucfirst(preg_replace('/[0-9]+/', '', $exam->exam_title)) . '</a>'; ?>
          </td>
          <td>
            <?php echo '<a href="' . \yii\helpers\Url::to(['examination/result', 'exam' => $exam->exam_title]) . '">' . 'Show Results' . '</a>'; ?>
          </td>
          <?php
// var_dump($model);
}
?>
          <br />
      </table>
      <?php
// display pagination
echo LinkPager::widget([
    'pagination' => $pagination,
]);
?>
    </div>

    <div class="col-md-6">
      <caption>Register new quick exam</caption>
      <table class="table table-striped table-bordered">
        <tr class="info">
          <td><b> S.No</b></td>
          <td><b> Subject</b></td>

        </tr>

        <?php
$x = 1;
$subjects = app\models\Subject::find()->limit(200)->all();
foreach ($subjects as $subject) {

    echo '    <tr class="warning"><td>' . $x . '</td>';

    echo '<td>';
    echo Html::beginForm(\yii\helpers\Url::to(['site/quick-exam'], true));
    echo Html::input($type = 'hidden', $name = 'subject', $value = $subject->id);
    echo Html::submitInput($label = $subject->name, $options = ['name' => 'submit', 'type' => 'submit', 'class' => '', 'value' => $subject->id, 'style' => 'border:none;background:none;']);
    echo Html::endForm();
    echo '</td>';

    echo ' </tr>';
    $x++;
}
?>




      </table>
    </div>

  </div>
</div>