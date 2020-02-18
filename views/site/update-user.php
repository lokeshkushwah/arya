<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Admins';
$this->params['breadcrumbs'][] = $this->title;
$users = Yii::$app->user->id;
if ($users != '') {
    $role = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
   // $role['Super Admin']->name; //Super Admin,institute,admin,user create
}
  //  if (array_key_exists('Super Admin',$role)  || array_key_exists('Admin',$role) ) {
?>
<div class="user-admin-index container">
<br/><br/>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a('Create User ', ['create'], ['class' => 'btn btn-success']) ?>
       
        <input type="button" id="btnExport" value="Export to Excel" class="btn btn-success"/>
        &nbsp; &nbsp; <a href="http://onlineexamhub.com/export.php?batch=<?php echo \Yii::$app->user->identity->batch; ?>">Export All User</a>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
                'name',
            'father_name',
            'course',
             'mobile',
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
               // 'filter' => Html::dropDownList('UserAdminSearch[batch]', $searchModel->batch, yii\helpers\ArrayHelper::map(app\models\Batch::find()->all(), 'id', 'name'), ['class' => 'form-control', 'prompt' => 'Select Any']),
              //  'format' => 'html'
            ],
                        
            //  'auth_key',
            //  'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'role',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'reg_key',
           // ['class' => 'yii\grid\ActionColumn'],
        [
          'class' => 'yii\grid\ActionColumn',
          'header' => 'Actions',
          'headerOptions' => ['style' => 'color:#337ab7'],
          'template' => '{update}',
          'buttons' => [
           

            'update' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                ]);
            },
          

          ],
          'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
                $url ='index.php?r=client-login/lead-view&id='.$model->id;
                return $url;
            }

            if ($action === 'update') {
                $url = \yii\helpers\Url::to( ['site/user-edit' , 'id'=>$model->id]);
                return $url;
            }
          

          }
          ],
        ],
    ]);
    ?>
    <br/><br/>
</div>

