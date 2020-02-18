<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FloorPlanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Floor Plans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floor-plan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Floor Plan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'plan_name',
            'img',
            'projects_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
