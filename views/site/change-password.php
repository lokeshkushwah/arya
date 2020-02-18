<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\UserAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?php // $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

   
   
  

   <?php // $form->field($model, 'role')->textInput() ?>

  <?php // $form->field($model, 'status')->textInput() ?>

   <?php // $form->field($model, 'created_at')->textInput() ?>

  <?php // $form->field($model, 'updated_at')->textInput() ?>

    <?php // $form->field($model, 'reg_key')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
