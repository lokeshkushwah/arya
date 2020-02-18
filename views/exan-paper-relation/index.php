<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExanPaperRelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exan Paper Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exan-paper-relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exan Paper Relation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'exam_id',
            'subject_id',
            'question_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
