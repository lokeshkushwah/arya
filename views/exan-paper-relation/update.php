<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExanPaperRelation */

$this->title = 'Update Exan Paper Relation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exan Paper Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exan-paper-relation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
