<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExamUser */

$this->title = 'Update Exam User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exam Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exam-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
