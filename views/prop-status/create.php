<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PropStatus */

$this->title = 'Create Prop Status';
$this->params['breadcrumbs'][] = ['label' => 'Prop Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
