<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PropImage */

$this->title = 'Create Prop Image';
$this->params['breadcrumbs'][] = ['label' => 'Prop Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
