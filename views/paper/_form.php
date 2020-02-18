<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Paper */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paper-form">

    <?php $form = ActiveForm::begin(); ?>

    
        <?php // echo $form->field($model, 'exam')->textInput(['maxlength' => true]) ?>
        <?php
    $exam = \yii\helpers\ArrayHelper::map(app\models\Exam::find()->all(), 'id', 'exam_title');
    echo $form->field($model, 'exam_id')->widget(Select2::classname(), [
        'data' => $exam,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'subject_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_of_question')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
