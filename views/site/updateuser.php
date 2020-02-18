<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserAdmin */
/* @var $form ActiveForm */
?>
<div class="site-updateuser container">
<br/>
    <?php $form = ActiveForm::begin(); ?>

   
        <?= $form->field($model, 'password_hash')->label('Change Password') ?>
      
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
<br/><br/>
</div><!-- site-updateuser -->
