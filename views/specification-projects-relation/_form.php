<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SpecificationProjectsRelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="specification-projects-relation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'specification_id')->textInput() ?>

    <?= $form->field($model, 'projects_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
