<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamintionUserRelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examintion-user-relation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'exam_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <?= $form->field($model, 'given_answar')->textInput() ?>

    <?= $form->field($model, 'correct_answar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
