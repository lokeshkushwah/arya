<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SpecificationProjectsRelation */

$this->title = 'Create Specification Projects Relation';
$this->params['breadcrumbs'][] = ['label' => 'Specification Projects Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specification-projects-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
