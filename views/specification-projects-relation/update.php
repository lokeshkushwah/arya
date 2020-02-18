<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SpecificationProjectsRelation */

$this->title = 'Update Specification Projects Relation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Specification Projects Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specification-projects-relation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
