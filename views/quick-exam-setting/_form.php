<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QuickExamSetting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quick-exam-setting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_of_question')->textInput() ?>

    <?= $form->field($model, 'mark_per_question')->textInput() ?>

    <?= $form->field($model, 'negative_mark_per_question')->textInput() ?>

    <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
