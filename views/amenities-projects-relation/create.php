<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AmenitiesProjectsRelation */

$this->title = 'Create Amenities Projects Relation';
$this->params['breadcrumbs'][] = ['label' => 'Amenities Projects Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="amenities-projects-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
