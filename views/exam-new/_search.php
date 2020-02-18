<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamNewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-new-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'exam_title') ?>

    <?= $form->field($model, 'start') ?>

    <?= $form->field($model, 'end') ?>

    <?= $form->field($model, 'nagitive_marks') ?>

    <?php // echo $form->field($model, 'marks_per_question') ?>

    <?php // echo $form->field($model, 'explan') ?>

    <?php // echo $form->field($model, 'quick_exam') ?>

    <?php // echo $form->field($model, 'create_on') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
