<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\QuickExamSetting */

$this->title = 'Create Quick Exam Setting';
$this->params['breadcrumbs'][] = ['label' => 'Quick Exam Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quick-exam-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
