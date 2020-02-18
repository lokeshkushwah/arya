
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use app\models\Exam;
use yii\db\Query;

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
    <br/><br/>
         <p><input type="button" id="btnExport" value="Export to Excel" class="btn btn-success"/></p>
        <?php
//$this->params['breadcrumbs'][] = $this->title;
        ?>

        <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>
 
       
        <div class="col-md-12">
                      
                        <?php
                        if (Yii::$app->user->id) {
                            $batch_find=Yii::$app->user->identity->batch;
                             $sql="SELECT * FROM exam LEFT JOIN exam_user ON exam.id=exam_user.exam LEFT JOIN user ON exam_user.user=user.id WHERE exam_user.user=$users AND exam.quick_exam='no' GROUP BY exam.exam_title order by exam.id DESC limit 100";
                            $list= Yii::$app->db->createCommand($sql)->queryAll();
                          
                                ?>

                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>Id</td>
                                    <td>Exam</td>  
                                    <td>Start</td>   
                                    <td>Result</td>   
                                   

                                </tr>
                                <?php
                                $x=1;
                                foreach($list as $exam_list) {
                                  //  var_dump($exam_list);
                                    ?>
                                <tr>
                                <td><?php echo $x; ?></td>
                                <td><?php echo $exam_list['exam_title']; ?></td>
                                <td><?php echo $exam_list['start']; ?></td>
                                <td> <a href="<?php echo \yii\helpers\Url::to(['examination/result', 'exam' => $exam_list['exam_title']]); ?>" >Show</a> </td>
                                </tr>

                                <?php
                                $x++;
                                }
                                ?>


                            </table>
                        <?php } ?>
                    </div><br/><br/>
    </div>
    <?php
} else {
    ?>
 
            <?php
            $abc = 0;


            // var_dump($myexamams);
            $exam = \app\models\Exam::find()->where(['exam_title' => $myexamams])->orderBy('id DESC')->one();
            $institute = \app\models\User::find()->where(['user.id' => Yii::$app->user->id])->all();
            $exam_user = \app\models\ExamUser::find()->where(['exam' => $exam->id])->all();
        // var_dump($exam_user);
            ?>
    <div class="container">
        <br/><br/>
 <p><input type="button" id="btnExport" value="Export to Excel" class="btn btn-success"/></p>
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
                 $userfind = app\models\User::find()->where(['id' => $res_user['user'],'batch'=>\Yii::$app->user->identity->batch])->one();
                // var_dump($userfind)
                if($marks!='') {
                ?>


                  <tr class="warning">  <td>                                                         
                        <?php
                       
                        echo $userfind->username;
                        ?>
                                                     </td>                             <td><?php echo $marks;  ?></td>    <td ><?php echo $nagitive; ?></td>

															  
                                        <td><?php echo $getmark  ?></td>
                                         <td><?php echo $totalmark; ?></td>
                                                    </tr>

          
                <?php
                }
                $ab++;
                
            }
        }
        ?>
            </table>
 <br/><br/>
            </div>


    <?php
$this->registerJsFile('/js/jquery.tablesorter.min.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
$js2="$('#keywords').tablesorter(); });";
$this->registerJs($js2);
