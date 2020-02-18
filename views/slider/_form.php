<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>
  <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn btn-success" type="button" style="margin:-10px 0 10px;">Select Slider Image</a>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

	<div class="modal fade" id="myModal" >
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body" >
      <iframe  src="<?php echo Yii::$app->homeUrl; ?>myfck/filemanager/dialog.php?type=2&field_id=slider-img'&fldr=" frameborder="0"  style="width:100%;min-height:450px"></iframe>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <?php ActiveForm::end(); ?>
	<?php
$this->registerJsFile('myfck/ckeditor.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile('myfck/custom.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$this->registerJsFile( '/js/js_0.js', ['depends' => [yii\web\JqueryAsset::className()]]);
$js="
jQuery(document).ready(function ($) {
      $('.iframe-btn').fancybox({
			  'width'	: 880,
			  'height'	: 570,
			  'type'	: 'iframe',
			  'autoScale'   : false
      });
      
 
			//
			// Handles message from ResponsiveFilemanager
			//
			function OnMessage(e){
			  var event = e.originalEvent;
			   // Make sure the sender of the event is trusted
			   if(event.data.sender === 'responsivefilemanager'){
			      if(event.data.field_id){
			      	var fieldID=event.data.field_id;
			      	var url=event.data.url;
							$('#'+fieldID).val(url).trigger('change');
							$.fancybox.close();

							// Delete handler of the message from ResponsiveFilemanager
							$(window).off('message', OnMessage);
			      }
			   }
			}

		  // Handler for a message from ResponsiveFilemanager
			$('.iframe-btn').on('click',function(){
			  $(window).on('message', OnMessage);
			});" ;
			$this->registerJs($js);
?>
</div>
