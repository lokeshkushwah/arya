<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\typeahead\TypeaheadBasic;
use kartik\typeahead\Typeahead;

/* @var $this yii\web\View */
/* @var $model app\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
    $data = \yii\helpers\ArrayHelper::map(app\models\State::find()->all(), 'id', 'state_name');
   
    echo $form->field($model, 'state_id')->widget(TypeaheadBasic::classname(), [
    'data' => $data,
    'pluginOptions' => ['highlight' => true],
    'options' => ['placeholder' => 'Select one...'],
]);
     ?>
    <?php //$form->field($model, 'state_id')->dropDownList($data) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
