<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>
         <?php
    $project_name = \yii\helpers\ArrayHelper::map(app\models\Projects::find()->all(), 'id', 'project_name');
    echo $form->field($model, 'projects_id')->widget(Select2::classname(), [
        'data' => $project_name,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?php // $form->field($model, 'projects_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
