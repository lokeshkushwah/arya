<?php

namespace app\controllers;

use Yii;
use app\models\Question;
use app\models\ExamSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\ExamintionUserRelation;

class ExaminationController extends Controller {

//    public function actionIndex() {
//       // $searchModel = new ExamSearch();
//       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//       // $dataProvider->pagination = ['defaultPageSize' => 1];
//        return $this->render('index');
//    }
    public function actionIndex() {
        $cc = 1;
        $request = Yii::$app->request;
        $exam = $request->get('exam');
        //  echo $exam;

        $examtrue = \app\models\Exam::find()->where(['exam_title' => $exam])->one();
        // var_dump($examtrue);
        //   echo $examtrue->id;
        $exam_id = $examtrue->id;
        $quesitons = \app\models\ExamPaperRelation::find()->where(['exam_id' => $examtrue->id])->orderBy('subject_id')->all();
        $no_of_quesitons = \app\models\ExamPaperRelation::find()->where(['exam_id' => $examtrue->id])->count();

        $query = \app\models\ExamPaperRelation::find()->where(['exam_id' => $examtrue->id]);
        $pagination = new Pagination([
            'defaultPageSize' => 2000,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('RAND()')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();

        // var_dump($quesitons);
        return $this->render('index', [
                    'cc' => $cc, 'exam_id' => $exam_id, 'countries' => $countries, 'pagination' => $pagination,
        ]);
    }

    public function actionTest() {
        return $this->render('test');
    }
    
     public function actionResult() {
        return $this->render('result');
    }

    public function actionSaveUserAnswer() {
        $answer_id = Yii::$app->request->post('answer_id');
        $question_id = Yii::$app->request->post('question_id');
        $exam_id = Yii::$app->request->post('exam_id');
        $question = Question::findOne(['id' => $question_id]);
        $exam = ExamintionUserRelation::findOne(['exam_id' => $exam_id, 'question_id' => $question_id, 'user_id' => Yii::$app->user->id]);
        if (!$exam) {
            $exam = new ExamintionUserRelation();
        }

        $exam->exam_id = $exam_id;
        $exam->question_id = $question_id;
        $exam->user_id = Yii::$app->user->id;
        $exam->given_answar = $answer_id;
        $exam->correct_answar = $question->correct_answar;
        if ($answer_id == $question->correct_answar) {
            $exam->result = 1;
        } else {
            $exam->result = 0;
        }
        $exam_time_check = \app\models\Exam::find()->where(['id' => $exam_id])->one();
        $current = strtotime(date('Y-m-d H:i:s'));
        $start = strtotime($exam_time_check->start);
        $end = strtotime($exam_time_check->end);
        if ($current >= $start && $current <= $end) {
            if (!$exam->save()) {
                //echo "<pre>";print_r($exam);echo "</pre>";
                $msg = '';
                foreach ($exam->errors as $error) {
                    if (is_array($error)) {
                        foreach ($error as $e) {
                            $msg .= $e . "<br/>";
                        }
                    } else {
                        $msg .= $error . "<br/>";
                    }
                }
                $status = 0;
            } else {
                $msg = 'Data saved';
                $status = 1;
            }
            return json_encode(['msg' => $msg, 'status' => $status]);
        } else {
            $status = 2;
            return json_encode(['msg' => 'ops', 'status' => $status]);
        }
    }

    public function actionDeleteUserAnswer() {
        if (Yii::$app->request->post('del_question') && Yii::$app->request->post('exam_id')) {
            $find_question = ExamintionUserRelation::find(['exam_id' => Yii::$app->request->post('exam_id'), 'question_id' => Yii::$app->request->post('del_question'), 'user_id' => Yii::$app->user->id])->count();

            if (ExamintionUserRelation::find(['exam_id' => Yii::$app->request->post('exam_id'), 'question_id' => Yii::$app->request->post('del_question'), 'user_id' => Yii::$app->user->id])->count()) {
                $del_question = ExamintionUserRelation::findOne(['exam_id' => Yii::$app->request->post('exam_id'), 'question_id' => Yii::$app->request->post('del_question'), 'user_id' => Yii::$app->user->id]);
                // var_dump($del_question);
                if ($del_question != '') {
                    $exam_id = Yii::$app->request->post('exam_id');
                    $exam_time_check = \app\models\Exam::find()->where(['id' => $exam_id])->one();
                    $current = strtotime(date('Y-m-d H:i:s'));
                    $start = strtotime($exam_time_check->start);
                    $end = strtotime($exam_time_check->end);
                    if ($current >= $start && $current <= $end) {
                        $del_question->delete();
                        $msg = 'data delete';
                        $status = 4;
                        return json_encode(['msg' => $msg, 'status' => $status]);
                    }
                }
            } else {
                $msg = 'Data not found';
                $status = 4;
                return json_encode(['msg' => $msg, 'status' => $status]);
            }
        }
    }

}
