<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuestionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'subject_id') ?>

    <?= $form->field($model, 'question_desc') ?>

    <?= $form->field($model, 'question_option1') ?>

    <?= $form->field($model, 'question_option2') ?>

    <?php // echo $form->field($model, 'question_option3') ?>

    <?php // echo $form->field($model, 'question_option4') ?>

    <?php // echo $form->field($model, 'question_option5') ?>

    <?php // echo $form->field($model, 'correct_answar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
