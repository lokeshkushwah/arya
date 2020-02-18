
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exams';
//$this->params['breadcrumbs'][] = $this->title;
$users = Yii::$app->user->id;
$request = Yii::$app->request;
$myexamams = $request->get('exam');

if ($myexamams == "") {
    ?>

    <div class="container">
        <?php
//$this->params['breadcrumbs'][] = $this->title;
        ?>

        <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>


        <table class="table table-striped table-bordered">


            <tr class="info"> 

                <td><b> S.No</b></td>

                <td><b> Exam Name</b></td>
                <td><b>Date/Time</b></td> 


                <td><b>Result </b> </td>
            </tr>

            <?php
          
            //die();
            $abc = 1;
          
                    $exam = \app\models\Exam::find()->orderBy('id DESC')->all();


                    //$total_question=\app\models\ExamintionUserRelation::find()->where(['user_id'=>$user,'exam_id'=>$exam->id])->count();
                    // var_dump($total_question);
                    foreach ($exam as $ex) {
                    ?>

             
                   

                        <tr class="warning">
                            <td><?php echo $abc; ?></td>
                            <td><a href="<?php echo \yii\helpers\Url::to(['examination/test', 'exam' => $ex->exam_title]); ?>" ><?php echo ucfirst($ex->exam_title); ?></a> </td>
                            <td ><?php echo $ex->start; ?></td>

                            <td>
                                <?php
                              
                                    ?>

                                    <a href="<?php echo \yii\helpers\Url::to(['user-admin/exam-results', 'exam' => $ex->exam_title]); ?>" >Show</a> </td>

                                <?php
                       
                            ?>
                        </tr>


                        <?php
                        
                        $abc++;
                    }
                    ?>

                    <?php
              
            ?>
        </table>
    </div>
    <?php
} else {
    ?>
 
            <?php
            $abc = 0;


            // var_dump($myexamams);
            $exam = \app\models\Exam::find()->where(['exam_title' => $myexamams])->orderBy('id DESC')->one();
            $exam_user = \app\models\ExamUser::find()->where(['exam' => $exam->id])->all();
        // var_dump($exam_user);
            ?>
			   <table id="keywords" class="table table-striped table-bordered">
           <thead>
       <tr class="info">
      
        <th>Name </th>
		 <th >Positive marks: <?php echo $exam->marks_per_question;  ?> </th>
        <th id="city_header">Negative marks: <?php echo $exam->nagitive_marks;  ?></th>
        <th> Obtain Marks </th>
          <th> Total Marks </th>
    </tr>
      
			<?php
			foreach ($exam_user as $res_user) {
                ?>
                                       
                <?php
                $ab = 1;

                $abc++;
                $total_attemp = app\models\ExamintionUserRelation::find()->where(['exam_id' => $exam->id, 'user_id' => $res_user['user']])->count();
                $correct_ans_given = app\models\ExamintionUserRelation::find()->where(['result' => '1', 'user_id' => $res_user['user'],'exam_id' => $exam->id])->count();
                $total_question = app\models\Paper::find()->where(['exam_id' => $exam->id,])->all();
                //var_dump($total_question);
                $total = 0;
                foreach ($total_question as $total_questions) {
                    $total+=$total_questions->no_of_question;
                }
                $marks = $correct_ans_given * $exam->marks_per_question;
                $nagitive = ($total_attemp - $correct_ans_given) * $exam->nagitive_marks;
                $totalmark = $total * $exam->marks_per_question;
                $getmark = $marks - $nagitive;
                ?>


                  <tr class="warning">  <td>                                                         
                        <?php
                        $userfind = app\models\User::find()->where(['id' => $res_user['user']])->one();
                        echo $userfind->username;
                        ?>
                                                     </td>                             <td><?php echo $marks;  ?></td>    <td ><?php echo $nagitive; ?></td>

															  
                                        <td><?php echo $getmark  ?></td>
                                         <td><?php echo $totalmark; ?></td>
                                                    </tr>

          
                <?php
                $ab++;
            }
        }
        ?>
            </table>
            </div>

    <?php
$this->registerJsFile('/js/jquery.tablesorter.min.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
$js2="$('#keywords').tablesorter(); });";
$this->registerJs($js2);
