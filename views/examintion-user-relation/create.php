<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExamintionUserRelation */

$this->title = 'Create Examintion User Relation';
$this->params['breadcrumbs'][] = ['label' => 'Examintion User Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examintion-user-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
