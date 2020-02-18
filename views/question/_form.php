<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use kartik\select2\Select2;
\yii\web\View::POS_END;

/* @var $this yii\web\View */
/* @var $model app\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="col-md-6">
        <?php // $form->field($model, 'subject_id')->textInput(['maxlength' => true]) ?>
        <?php
        echo $form->field($model, 'subject_id')->widget(Select2::classname(), [
            'data' => yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(), 'id', 'name'),
            'language' => 'de',
            'options' => ['placeholder' => 'Select a state ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
        ?>
        <?= $form->field($model, 'question_desc')->textarea(['rows' => 6]) ?>
        <?= $form->field($model, 'question_option1')->textarea(['maxlength' => true, 'rows' => 6, 'placeholder' => 'Option 1']) ?>
        <?= $form->field($model, 'question_option2')->textarea(['maxlength' => true, 'rows' => 6]) ?>
        <?= $form->field($model, 'question_option3')->textarea(['maxlength' => true, 'rows' => 6]) ?>
        <?= $form->field($model, 'question_option4')->textarea(['maxlength' => true, 'rows' => 6]) ?>
        <?= $form->field($model, 'question_option5')->textarea(['maxlength' => true, 'rows' => 6]) ?>
        
        <?php // $form->field($model, 'correct_answar')->textInput() ?>
               <?php
        echo $form->field($model, 'correct_answar')->widget(Select2::classname(), [
            'data' => ['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5],
            'language' => 'de',
            'options' => ['placeholder' => 'Select a answar ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
        ?>
    </div>
    <div class="col-md-6">
        <label class="control-label" for="question-question_desc">Hindi Converter</label>

        <textarea name="TextToConvert" id="legacy_text0" rows="12" class="form-control" placeholder="convert" ></textarea> <br>


        <button  type="button" name="converter" id="converter"  onClick="convert_to_unicode0();" accesskey="c" title="शॉर्टकट alt+c">Convert </button>
    </div>
    <div class="clearfix"></div>






    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$this->registerJsFile('myfck/ckeditor.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('myfck/custom.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile( '/js/js_0.js', ['depends' => [yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Yii::$app->request->hostInfo . '/js/js_1.js');
//$this->registerJsFile(Yii::$app->request->hostInfo . '/js/js_2.js');
///$this->registerJsFile(Yii::$app->request->hostInfo . '/js/js_3.js');
//$this->registerJsFile(Yii::$app->request->hostInfo . '/js/js_4.js');
//$this->registerJsFile(Yii::$app->request->hostInfo . '/js/js_5.js');
//$js='CKEDITOR.replace( "question-question_desc", config); CKEDITOR.replace( "question-question-question_option1", config);CKEDITOR.replace( "question-question-question_option2", config);CKEDITOR.replace( "question-question-question_option3", config);CKEDITOR.replace( "question-question_option4", config);CKEDITOR.replace( "question-question_option5", config);';
$this->registerJs('CKEDITOR.replace( "question-question_desc", config)');
$this->registerJs('CKEDITOR.replace( "question-question_option1", config)');
$this->registerJs('CKEDITOR.replace( "question-question_option2", config)');
$this->registerJs('CKEDITOR.replace( "question-question_option3", config)');
$this->registerJs('CKEDITOR.replace( "question-question_option4", config)');
$this->registerJs('CKEDITOR.replace( "question-question_option5", config)');
?>