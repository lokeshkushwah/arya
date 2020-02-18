<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?php // $form->field($model, 'reason_id')->textInput() ?>
    <?php
    $reason = \yii\helpers\ArrayHelper::map(app\models\Reason::find()->all(), 'id', 'reason');
    echo $form->field($model, 'reason_id')->widget(Select2::classname(), [
        'data' => $reason,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php echo $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>
    <?php
//    $project_name = \yii\helpers\ArrayHelper::map(app\models\Projects::find()->all(), 'id', 'project_name');
//    echo $form->field($model, 'project_name')->widget(Select2::classname(), [
//        'data' => $project_name,
//        'language' => 'en',
//        'options' => ['placeholder' => 'Select select one ...','class'=>'col-md-6'],
//        'pluginOptions' => [
//            'allowClear' => true
//        ],
//    ]);
    ?>

    <?= $form->field($model, 'possession')->textInput() ?>

    <?= $form->field($model, 'built_area')->textInput() ?>

    <?= $form->field($model, 'total_area')->textInput() ?>

    <?php // $form->field($model, 'area_id')->textInput() ?>
    <?php
    $total_area = \yii\helpers\ArrayHelper::map(app\models\Area::find()->all(), 'id', 'area_name');
    echo $form->field($model, 'area_id')->widget(Select2::classname(), [
        'data' => $total_area,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'no_of_units')->textInput() ?>
    

    
    
     <?php DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelsPrice[0],
        'formId' => 'dynamic-form',
        'formFields' => [
            'price',
            'area',
           // 'address_line2',
          //  'city',
          //  'state',
          //  'postal_code',
        ],
    ]); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-envelope"></i> Price
                <button type="button" class="add-item btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
            </h4>
        </div>
        <div class="panel-body">
            <div class="container-items"><!-- widgetBody -->
            <?php foreach ($modelsPrice as $i => $modelPrice): ?>
                <div class="item panel panel-default"><!-- widgetItem -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Price</h3>
                        <div class="pull-right">
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelPrice->isNewRecord) {
                                echo Html::activeHiddenInput($modelPrice, "[{$i}]id");
                            }
                        ?>
                        <?php // $form->field($modelPrice, "[{$i}]full_name")->textInput(['maxlength' => true]) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelPrice, "[{$i}]price")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($modelPrice, "[{$i}]area")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                       
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div><!-- .panel -->
 <?php DynamicFormWidget::end(); ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat_long_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'long_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'extra_note')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'city_id')->textInput() ?>
    <?php
    $city_id = \yii\helpers\ArrayHelper::map(app\models\City::find()->all(), 'id', 'city_name');
    echo $form->field($model, 'city_id')->widget(Select2::classname(), [
        'data' => $city_id,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php // $form->field($model, 'status_id')->textInput() ?>
    <?php
    $status_id = \yii\helpers\ArrayHelper::map(app\models\PropStatus::find()->all(), 'id', 'status_name');
    echo $form->field($model, 'status_id')->widget(Select2::classname(), [
        'data' => $status_id,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php // $form->field($model, 'type_id')->textInput() ?>
    <?php
    $type_id = \yii\helpers\ArrayHelper::map(app\models\PropType::find()->all(), 'id', 'type');
    echo $form->field($model, 'type_id')->widget(Select2::classname(), [
        'data' => $type_id,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php // $form->field($model, 'classification_id')->textInput() ?>
    <?php
    $classification_id = \yii\helpers\ArrayHelper::map(app\models\PropClassification::find()->all(), 'id', 'classification');
    echo $form->field($model, 'classification_id')->widget(Select2::classname(), [
        'data' => $classification_id,
        'language' => 'en',
        'options' => ['placeholder' => 'Select select one ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approved')->dropDownList([ 'yes' => 'Yes', 'no' => 'No',], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
