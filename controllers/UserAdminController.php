<?php

namespace app\controllers;

use Yii;
use app\models\UserAdmin;
use app\models\UserAdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\User;

/**
 * UserAdminController implements the CRUD actions for UserAdmin model.
 */
class UserAdminController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
      public function actionResult() {
       
        return $this->render('result');
    }

    /**
     * Lists all UserAdmin models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new UserAdminSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    
      public function actionExamResults() {
       
        return $this->render('exam-result');
    }

    /**
     * Displays a single UserAdmin model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserAdmin model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new UserAdmin();

        if ($model->load(Yii::$app->request->post())) {

            $request = Yii::$app->request->post();



            $password = $request['UserAdmin']['password_hash'];
            $new = \Yii::$app->security->generatePasswordHash($password);
            echo $new;
            $model->password_hash = $new;
            $model->auth_key = Yii::$app->security->generateRandomString();
            $model->created_at = strtotime(date('d-m-y H:i:s'));
            $model->updated_at = strtotime(date('d-m-y H:i:s'));
            //die();
           	
            $model->save();
            Yii::$app->authManager->assign(Yii::$app->authManager->getRole('Registered'), $model->id);
             return $this->redirect(['index']);
           // return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserAdmin model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $request = Yii::$app->request->post();



            echo $password = $request['UserAdmin']['password_hash'];
            $new = \Yii::$app->security->generatePasswordHash($password);
            $model->password_hash = $new;
            //die();
             if($id==4) { 
             //doing nothing
             }else {
             $model->save();
       }

          
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UserAdmin model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $admin = UserAdmin::find()->where(['username'] == 'lokesh.kushwah')->one();
        $admin_id = $admin->id;
     
            $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserAdmin model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserAdmin the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = UserAdmin::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
