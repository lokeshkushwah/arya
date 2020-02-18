<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuestionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $this->title;
yii\widgets\Pjax::begin();
?>
<div class="question-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);    ?>

    <p>
        <?= Html::a('Create Question', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'subject_id' => [
                'attribute' => 'subject_id',
                'value' => function ($model) {
                    $subject = app\models\Subject::find()->where(['id' => $model->subject_id])->one();
                    return $subject->name;
                },
                        'filter' => Html::dropDownList('QuestionSearch[subject_id]', $searchModel->subject_id, yii\helpers\ArrayHelper::map(app\models\Subject::find()->all(), 'id', 'name'), ['class' => 'form-control', 'prompt' => 'Select Any']),
                        'format' => 'html'
                    ],
                    'question_desc:ntext',
                    //  'question_option1',
                    //   'question_option2',
                    // 'question_option3',
                    // 'question_option4',
                    // 'question_option5',
                    // 'correct_answar',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
        <?php
        yii\widgets\Pjax::end();
        