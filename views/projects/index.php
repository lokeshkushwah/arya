<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Projects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'reason_id',
            'project_name',
            'possession',
            'built_area',
            // 'total_area',
            // 'area_id',
            // 'no_of_units',
            // 'location',
            // 'address',
            // 'lat_long_address',
            // 'short_desc',
            // 'long_desc:ntext',
            // 'extra_note',
            // 'city_id',
            // 'status_id',
            // 'type_id',
            // 'classification_id',
            // 'user_id',
            // 'img',
            // 'approved',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
