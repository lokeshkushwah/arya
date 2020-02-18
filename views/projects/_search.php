<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'reason_id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'possession') ?>

    <?= $form->field($model, 'built_area') ?>

    <?php // echo $form->field($model, 'total_area') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'no_of_units') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'lat_long_address') ?>

    <?php // echo $form->field($model, 'short_desc') ?>

    <?php // echo $form->field($model, 'long_desc') ?>

    <?php // echo $form->field($model, 'extra_note') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'classification_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'approved') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
