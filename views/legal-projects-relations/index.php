<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LegalProjectsRelationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Legal Projects Relations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-projects-relations-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Legal Projects Relations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'legal_id',
            'project_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
