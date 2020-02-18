<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExamNew */

$this->title = 'Create Exam New';
$this->params['breadcrumbs'][] = ['label' => 'Exam News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-new-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
