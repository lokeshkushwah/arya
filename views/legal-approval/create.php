<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LegalApproval */

$this->title = 'Create Legal Approval';
$this->params['breadcrumbs'][] = ['label' => 'Legal Approvals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-approval-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
