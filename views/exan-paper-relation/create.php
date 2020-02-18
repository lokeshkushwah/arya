<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExanPaperRelation */

$this->title = 'Create Exan Paper Relation';
$this->params['breadcrumbs'][] = ['label' => 'Exan Paper Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exan-paper-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
