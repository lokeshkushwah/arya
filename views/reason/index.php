<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReasonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reasons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reason-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reason', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reason',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
