<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Exam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form1']); ?>

    <?= $form->field($model, 'exam_title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'marks_per_question')->textInput() ?>
    <?php echo $form->field($model, 'nagitive_marks')->textInput() ?>
   
    <?php
    echo $form->field($model, 'start')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter event time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'todayHighlight' => true,
            'todayBtn' => true,
            //   'format' => 'y-m-d H:i:s',
            'format' => 'yyyy-M-dd H:i:ss',
            'autoclose' => true,
        ]
    ]);
    ?>

    <?php
    echo $form->field($model, 'end')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter event time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'todayHighlight' => true,
            'todayBtn' => true,
            // 'format' => 'y-m-d H:i:s',
            'format' => 'yyyy-M-dd H:i:ss',
            'autoclose' => true,
        ]
    ]);
    ?>
    <?php //echo $form->field($model, 'end')->textInput() ?>
    <?php
    DynamicFormWidget::begin([
        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
        'widgetBody' => '.container-items', // required: css class selector
        'widgetItem' => '.item', // required: css class
        'limit' => 4, // the maximum times, an element can be added (default 999)
        'min' => 0, // 0 or 1 (default 1)
        'insertButton' => '.add-item', // css class
        'deleteButton' => '.remove-item', // css class
        'model' => $modelsPaper[0],
        'formId' => 'dynamic-form1',
        'formFields' => [
            'subject_id',
            'no_of_question',
        // 'address_line2',
        //  'city',
        //  'state',
        //  'postal_code',
        ],
    ]);
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>
                <i class="glyphicon glyphicon-envelope"></i> Paper
                <button type="button" class="add-item btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add</button>
            </h4>
        </div>
        <div class="panel-body">
            <div class="container-items"><!-- widgetBody -->
                <?php foreach ($modelsPaper as $i => $modelPaper): ?>
                    <div class="item panel panel-default"><!-- widgetItem -->
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Paper</h3>
                            <div class="pull-right">
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <?php
                            // necessary for update action.
                            if (!$modelPaper->isNewRecord) {
                                echo Html::activeHiddenInput($modelPaper, "[{$i}]id");
                            }
                            ?>
                            <?php // $form->field($modelPaper, "[{$i}]full_name")->textInput(['maxlength' => true]) ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php // $form->field($modelPaper, "[{$i}]subject_id")->textInput(['maxlength' => true]) ?>

                                    <?php // echo $form->field($model, 'exam')->textInput(['maxlength' => true]) ?>
                                    <?php
                                    $subject = \yii\helpers\ArrayHelper::map(app\models\Subject::find()->all(), 'id', 'name');
                                    echo $form->field($modelPaper, "[{$i}]subject_id")->dropDownList(\yii\helpers\ArrayHelper::map(app\models\Subject::find()->all(), 'id', 'name'));
//                                    echo $form->field($modelPaper, "[{$i}]subject_id")->widget(Select2::classname(), [
//                                        'data' => $subject,
//                                        'language' => 'en',
//                                        'options' => ['placeholder' => 'Select select one ...','style'=>'display:inline !important'],
//                                        'pluginOptions' => [
//                                            'allowClear' => true
//                                        ],
//                                    ]);
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?= $form->field($modelPaper, "[{$i}]no_of_question")->textInput(['maxlength' => true]) ?>
                                </div>
                            </div><!-- .row -->

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><!-- .panel -->
    <?php DynamicFormWidget::end(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
