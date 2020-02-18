<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FloorPlan */

$this->title = 'Create Floor Plan';
$this->params['breadcrumbs'][] = ['label' => 'Floor Plans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floor-plan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
