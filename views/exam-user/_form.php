<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\ExamUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php // echo $form->field($model, 'exam')->textInput(['maxlength' => true]) ?>
        <?php
    $exam = \yii\helpers\ArrayHelper::map(app\models\Exam::find()->all(), 'id', 'exam_title');
    echo $form->field($model, 'exam')->widget(Select2::classname(), [
        'data' => $exam,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

         <?php
    $user = \yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'username');
    echo $form->field($model, 'user')->widget(Select2::classname(), [
        'data' => $user,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?php $form->field($model, 'user')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
