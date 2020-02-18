<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BankApproval */

$this->title = 'Update Bank Approval: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bank Approvals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bank-approval-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
