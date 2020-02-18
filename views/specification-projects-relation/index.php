<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpecificationProjectsRelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Specification Projects Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specification-projects-relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Specification Projects Relation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'specification_id',
            'projects_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
