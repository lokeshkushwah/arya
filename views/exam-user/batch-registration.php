<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ExamUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exam-user-form">

	
	<?= Yii::$app->session->getFlash('success'); ?>
	
    <?= Html::beginForm(['exam-user/batch-registration'], 'post', ['enctype' => 'multipart/form-data']) ?>
    <?php echo '<b>Exam </b><br/>'; ?>
    <?= Html::dropDownList('exam', 'id', ArrayHelper::map(\app\models\Exam::find()->all(), 'id', 'exam_title'), ['class' => 'form-control']) ?>
    <?php echo '<br/><b>Batch</b> <br/>'; ?>      
    <?= Html::dropDownList('batch', 'id', ArrayHelper::map(\app\models\Batch::find()->where("name !='admin'")->all(), 'id', 'name'), ['class' => 'form-control']) ?>
    <?php echo ' <br/>'; ?>  
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <?= Html::endForm() ?>

</div>
