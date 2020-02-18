<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BankProjectsRelation */

$this->title = 'Create Bank Projects Relation';
$this->params['breadcrumbs'][] = ['label' => 'Bank Projects Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-projects-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
