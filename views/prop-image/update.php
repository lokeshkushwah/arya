<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PropImage */

$this->title = 'Update Prop Image: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Prop Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prop-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
