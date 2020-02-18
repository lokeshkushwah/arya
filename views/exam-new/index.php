<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamNewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exam News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-new-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exam New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'exam_title',
            'start',
            'end',
            'nagitive_marks',
            // 'marks_per_question',
            // 'explan',
            // 'quick_exam',
            // 'create_on',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
