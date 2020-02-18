<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PropType */

$this->title = 'Create Prop Type';
$this->params['breadcrumbs'][] = ['label' => 'Prop Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
