<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExamUser */

$this->title = 'Create Exam User';
$this->params['breadcrumbs'][] = ['label' => 'Exam Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
      //  'modelsUser' => $modelsUser,
    ]) ?>

</div>
