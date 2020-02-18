<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamNew */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-new-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'end')->textInput() ?>

    <?= $form->field($model, 'nagitive_marks')->textInput() ?>

    <?= $form->field($model, 'marks_per_question')->textInput() ?>

    <?= $form->field($model, 'explan')->textInput() ?>

    <?= $form->field($model, 'quick_exam')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
