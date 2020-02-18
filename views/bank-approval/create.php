<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BankApproval */

$this->title = 'Create Bank Approval';
$this->params['breadcrumbs'][] = ['label' => 'Bank Approvals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-approval-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
