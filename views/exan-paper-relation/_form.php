<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExanPaperRelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exan-paper-relation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
