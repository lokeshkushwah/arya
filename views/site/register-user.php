<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserAdmin */
/* @var $form ActiveForm */
?>
<div class="site-register-user container">
    <br/>
 <h1 class="text-center">Register User </h1>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
     <?= $form->errorSummary($model); ?>
        <?php // $form->field($model, 'batch') ?>
        <?php //  $form->field($model, 'auth_key') ?>
        <?= $form->field($model, 'password_hash') ?>
        <?= $form->field($model, 'email') ?>
     <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>
        <?php // $form->field($model, 'created_at') ?>
        <?php //$form->field($model, 'updated_at') ?>
        <?php // $form->field($model, 'role') ?>
        <?php // $form->field($model, 'status') ?>
        <?php // $form->field($model, 'password_reset_token') ?>
       <?php // $form->field($model, 'reg_key') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
<br/><br/>
</div><!-- site-register-user -->
