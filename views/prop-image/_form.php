<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\PropImage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prop-image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'project_id')->textInput() ?>
      <?php
    $project_name = \yii\helpers\ArrayHelper::map(app\models\Projects::find()->all(), 'id', 'project_name');
    echo $form->field($model, 'project_id')->widget(Select2::classname(), [
        'data' => $project_name,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
