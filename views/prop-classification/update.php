<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PropClassification */

$this->title = 'Update Prop Classification: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prop Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prop-classification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
