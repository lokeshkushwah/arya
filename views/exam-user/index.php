<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exam Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exam User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            /* 'user' =>[
              'attribute' => 'user',
              'value' => function ($model) {
              $exam = \app\models\User::find()->where(['id' => $model->user])->one();
              return $exam->username;
              }
              ], */
            'user' => [
                'attribute' => 'user',
                'value' => function ($model) {
                    $user = app\models\User::find()->where(['id' => $model->user])->one();
                    return $user->username;
                },
                        'filter' => Html::dropDownList('ExamUserSearch[user]', $searchModel->user, yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Any']),
                        'format' => 'html'
                    ],
                    'exam' => [
                        'attribute' => 'exam',
                        'value' => function ($model) {
                            $exam = \app\models\Exam::find()->where(['id' => $model->exam])->one();
                            return $exam->exam_title;
                        },
                                'filter' => Html::dropDownList('ExamUserSearch[exam]', $searchModel->exam, yii\helpers\ArrayHelper::map(app\models\Exam::find()->all(), 'id', 'exam_title'), ['class' => 'form-control', 'prompt' => 'Select Any']),
                                'format' => 'html'
                            ],
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>
</div>
