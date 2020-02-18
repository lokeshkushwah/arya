<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prop Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prop Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
