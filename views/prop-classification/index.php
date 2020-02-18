<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropClassificationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prop Classifications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prop-classification-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prop Classification', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'classification',
            'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
