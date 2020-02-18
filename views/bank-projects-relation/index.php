<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BankProjectsRelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bank Projects Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-projects-relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bank Projects Relation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bank_id',
            'projects_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
