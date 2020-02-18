<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create User ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            /* 'username' => [
              'attribute' => 'username',
              'value' => function ($model) {
              $user = app\models\User::find()->where(['id' => $model->username])->one();
              return $user->username;
              },
              'filter' => Html::dropDownList('ExamUserSearch[username]', $searchModel->username, yii\helpers\ArrayHelper::map(app\models\User::find()->all(), 'id', 'username'), ['class' => 'form-control', 'prompt' => 'Select Any']),
              'format' => 'html'
              ], */
            // 'batch',
            'batch' => [
                'attribute' => 'batch',
                'value' => function ($model) {
                    $batch = app\models\Batch::find()->where(['id' => $model->batch])->one();
                    return $batch->name;
                },
                        'filter' => Html::dropDownList('ExamUserSearch[batch]', $searchModel->batch, yii\helpers\ArrayHelper::map(app\models\Batch::find()->all(), 'id', 'name'), ['class' => 'form-control', 'prompt' => 'Select Any']),
                        'format' => 'html'
                    ],
                    //  'auth_key',
                    //  'password_hash',
                    // 'password_reset_token',
                    // 'email:email',
                    // 'role',
                    // 'status',
                    // 'created_at',
                    // 'updated_at',
                    // 'reg_key',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
</div>
