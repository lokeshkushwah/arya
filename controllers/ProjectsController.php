<?php

namespace app\controllers;

use Yii;
use app\models\Projects;
use app\models\Price;
use app\models\Model;
use yii\helpers\ArrayHelper;
use app\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller {

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

    /**
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Projects();
        $modelsPrice = [new Price];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $modelsPrice = Model::createMultiple(Price::classname());
            Model::loadMultiple($modelsPrice, Yii::$app->request->post());



            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsPrice) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsPrice as $modelPrice) {
                            $modelPrice->projects_id = $model->id;
                            if (!($flag = $modelPrice->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }






            // return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        'modelsPrice' => (empty($modelsPrice)) ? [new Address] : $modelsPrice,
            ]);
        }
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */

    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //$modelsPrice = $model->poitems; oh that error !!!
         $modelsPrice = Price::find()->where(['projects_id'=>$id])->all();//it ture! :D
       // $modelsPrice = Price::find()->where(['projects_id'=>$id])->all();//it ture! :D


 if ($model->load(Yii::$app->request->post()) && $model->save()) {
        $oldIDs = ArrayHelper::map($modelsPrice, 'id', 'id');
        $modelsPrice = Model::createMultiple(Price::classname(), $modelsPrice);
        Model::loadMultiple($modelsPrice, Yii::$app->request->post());
        $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsPrice, 'id', 'id')));


        // validate all models
        $valid = $model->validate();
        $valid = Model::validateMultiple($modelsPrice) && $valid;

        if ($valid) {
            $transaction = \Yii::$app->db->beginTransaction();
            try {
                if ($flag = $model->save(false)) {
                    if (! empty($deletedIDs)) {
                        Price::deleteAll(['id' => $deletedIDs]);
                    }
                    foreach ($modelsPrice as $modelPrice) {
                        $modelPrice->projects_id = $model->id;
                        if (! ($flag = $modelPrice->save(false))) {
                            $transaction->rollBack();
                            break;
                        }
                    }
                }
                if ($flag) {
                    $transaction->commit();
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            } catch (Exception $e) {
                $transaction->rollBack();
            }
        }
    } else {
        return $this->render('update', [
            'model' => $model,
            'modelsPrice'=>(empty($modelsPrice)) ? [new Price] : $modelsPrice]);
    }
}




    /**
     * Deletes an existing Projects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
