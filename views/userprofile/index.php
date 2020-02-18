<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userprofiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userprofile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
               'user_id'=> [

                'attribute' => 'user',

                'value' => function ($model) {

                    $user = app\models\User::find()->where(['id' => $model->user_id])->one();

                    return $user->username;

                },
                         'filter' => Html::dropDownList('UserprofileSearch[user_id]', $searchModel->user_id, yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Any']),

                        'format' => 'html'
                        ],
            'name', 
           // 'institute',
                 'institute'=> [

                'attribute' => 'institute',

                'value' => function ($model) {

                    $institute = app\models\Institute::find()->where(['id' => $model->institute])->one();
                  //  var_dump($institute);
                   // die();

                    return $institute->name;

                },
                         'filter' => Html::dropDownList('UserprofileSearch[institute]', $searchModel->user_id, yii\helpers\ArrayHelper::map(app\models\Institute::find()->all(), 'id', 'name'), ['class' => 'form-control', 'prompt' => 'Select Any']),

                        'format' => 'html'
                        ],
            'father_name',
            // 'course',
            // 'mobile_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
