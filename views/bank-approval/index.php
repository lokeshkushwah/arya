<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BankApprovalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bank Approvals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-approval-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bank Approval', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bank',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
