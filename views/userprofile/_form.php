<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-form">

    <?php $form = ActiveForm::begin(); ?>

      <?php

    $user = \yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'username');

    echo $form->field($model, 'user_id')->widget(Select2::classname(), [

        'data' => $user,

        'language' => 'en',

        'options' => ['placeholder' => 'Select select one ...'],

        'pluginOptions' => [

            'allowClear' => true

        ],

    ]);

    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'institute')->textInput(['maxlength' => true]) ?>
    
    <?php

    $institute = \yii\helpers\ArrayHelper::map(app\models\Institute::find()->all(), 'id', 'name');

    echo $form->field($model, 'institute')->widget(Select2::classname(), [

        'data' => $institute ,

        'language' => 'en',

        'options' => ['placeholder' => 'Select select one ...'],

        'pluginOptions' => [

            'allowClear' => true

        ],

    ]);

    ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
