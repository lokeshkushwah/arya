<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PropClassification */

$this->title = 'Create Prop Classification';
$this->params['breadcrumbs'][] = ['label' => 'Prop Classifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-classification-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
