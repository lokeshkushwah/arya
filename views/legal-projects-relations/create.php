<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LegalProjectsRelations */

$this->title = 'Create Legal Projects Relations';
$this->params['breadcrumbs'][] = ['label' => 'Legal Projects Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-projects-relations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
