<?php

namespace app\controllers;

use Yii;
use app\models\Exam;
use app\models\Paper;
use app\models\Model;

use yii\helpers\ArrayHelper;
use app\models\ExamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ExamController implements the CRUD actions for Exam model.
 */
class ExamController extends Controller {

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
     * Lists all Exam models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ExamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination = ['defaultPageSize' => 10];
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    ''
        ]);
    }

    /**
     * Displays a single Exam model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Exam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*
      public function actionCreate() {
      $model = new Exam();
      $modelsPaper = [new Paper];
      //   var_dump($modelsPaper);

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
      //   var_dump(Yii::$app->request->post());
      //    die();

      $modelsPaper = Model::createMultiple(Paper::classname());
      Model::loadMultiple($modelsPaper, Yii::$app->request->post());
      $valid = $model->validate();
      $valid = Model::validateMultiple($modelsPaper) && $valid;
      // die();

      if ($valid) {
      $transaction = \Yii::$app->db->beginTransaction();
      try {
      if ($flag = $model->save(false)) {
      foreach ($modelsPaper as $modelPaper) {

      $modelPaper->exam_id = $model->id;
      if (!($flag = $modelPaper->save(false))) {
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

      }
      return $this->render('create', [
      'model' => $model,
      'modelsPaper' => (empty($modelsPaper)) ? [new Paper] : $modelsPaper,
      ]);
      }
     */

    /**
     * Updates an existing Exam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionCreate() {
        $model = new Exam();
        $modelsPaper = [new Paper];
        //  var_dump(Yii::$app->request->post());
        $request = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post())) {

            $modelsPaper = Model::createMultiple(Paper::classname());
            Model::loadMultiple($modelsPaper, Yii::$app->request->post());

            // var_dump($modelsPaper);


            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsPaper) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(TRUE)) {
                        foreach ($modelsPaper as $modelPaper) {
                            $modelPaper->exam_id = $model->id;
                            if (!($flag = $modelPaper->save(true))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {

                        $transaction->commit();


                        foreach ($modelsPaper as $pp) {
                            $pp->subject_id;
                            $ids = $model->id;
                            $questions = \app\models\Question::find()->where(['subject_id' => $pp->subject_id])->limit($pp->no_of_question)->groupBy("id")->orderBy('rand()')->all();


                            foreach ($questions as $qq) {


                                $exam_paper_relation = new \app\models\ExamPaperRelation();
                                //   $Text = Exam::find()->max('id');
                                //    $exam_id = $Text + 1;
                                $exam_paper_relation->exam_id = $ids;
                                // echo $exam_paper_relation->exam_id;

                                $exam_paper_relation->question_id = $qq->id;
                                //  echo $exam_paper_relation->question_id;
                                $exam_paper_relation->subject_id = $qq->subject_id;
                                // echo $exam_paper_relation->question_id;
                                if (!$exam_paper_relation->save()) {
                                    // $exam_paper_relation->errors;
                                } else {
                                    //  echo 'working';
                                }
                            }
                        }


                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }






            // return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
                    'model' => $model,
                    'modelsPaper' => (empty($modelsPaper)) ? [new Paper] : $modelsPaper,
        ]);
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        //$modelsPaper = $model->poitems; oh that error !!!
        $modelsPaper = Paper::find()->where(['exam_id' => $id])->all(); //it ture! :D
        // $modelsPaper = Price::find()->where(['projects_id'=>$id])->all();//it ture! :D
        // var_dump(Yii::$app->request->post());
        // die();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $oldIDs = ArrayHelper::map($modelsPaper, 'id', 'id');
            $modelsPaper = Model::createMultiple(Paper::classname(), $modelsPaper);
            Model::loadMultiple($modelsPaper, Yii::$app->request->post());
            $deletedIDs = array_diff($oldIDs, array_filter(ArrayHelper::map($modelsPaper, 'id', 'id')));


            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsPaper) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (!empty($deletedIDs)) {
                            Paper::deleteAll(['id' => $deletedIDs]);
                        }
                        foreach ($modelsPaper as $modelPaper) {
                            $modelPaper->exam_id = $model->id;
                            if (!($flag = $modelPaper->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                          $delete= new \app\models\ExamPaperRelation();
                           $ids = $model->id;
                         if( $delete->deleteAll("exam_id=$ids")) {
                         //    echo 'delete';
                            // die();
                         }else {
                          //   echo 'not delete';
                          //   die();
                         }
                        foreach ($modelsPaper as $pp) {
                            echo '<br/><pre>';
                            // echo $pp->subject_id;
                            echo '<br/>';
                            //  var_dump($pp);
                            //  echo $model->id;
                            $ids = $model->id;
                            //echo $ids;



                            $questions = \app\models\Question::find()->where(['subject_id' => $pp->subject_id])->limit($pp->no_of_question)->groupBy("id")->orderBy('rand()')->all();
                            //  var_dump($questions);
                            //  echo  $questions->id;
                            foreach ($questions as $qq) {
                                echo $qq->id . ',';
                                $exam_paper_relation = new \app\models\ExamPaperRelation();

                                //   $Text = Exam::find()->max('id');
                                //    $exam_id = $Text + 1;
                                $exam_paper_relation->exam_id = $ids;
                                // echo $exam_paper_relation->exam_id;

                                $exam_paper_relation->question_id = $qq->id;
                                // echo $exam_paper_relation->question_id . ',';
                                $exam_paper_relation->subject_id = $qq->subject_id;
                                //    echo $exam_paper_relation->question_id . ',';
                                if (!$exam_paper_relation->save()) {
                                    $exam_paper_relation->errors;
                                } else {
                                    //  echo 'working';
                                }
                            }
                        }
                      //  die();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
        }
        return $this->render('update', [
                    'model' => $model,
                    'modelsPaper' => (empty($modelsPaper)) ? [new Paper] : $modelsPaper]);
    }

    /**
     * Deletes an existing Exam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Exam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Exam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Exam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
