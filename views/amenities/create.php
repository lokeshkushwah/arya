<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Amenities */

$this->title = 'Create Amenities';
$this->params['breadcrumbs'][] = ['label' => 'Amenities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="amenities-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
