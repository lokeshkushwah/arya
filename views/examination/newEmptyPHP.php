<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = 'Results';
//$this->params['breadcrumbs'][] = $this->title;

$users = Yii::$app->user->id;
$request = Yii::$app->request;
$myexamams = $request->get('exam');
//echo $myexamams;
$myexam = \app\models\Exam::find()->where(['exam_title' => $myexamams])->orderBy('id DESC')->one();
$start= $myexam->start;
$end= $myexam->end;
$starttime = strtotime($start);
$current = strtotime(date('Y-m-d H:i:s'));
//echo '<br/>';
$endtime = strtotime($end);
//var_dump($myexam);
//die();

//if ($endtime  >= $current) {
	echo '<h2>Results will declared on :' . date('d-m-Y H:i' , strtotime($end)).'<h2>';
	 ?>
	 <a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Back</a>
<?php // }else { ?>



<div class="container">


<?php


    $total_attemp = app\models\ExamintionUserRelation::find()->where(['exam_id' => $myexam->id, 'user_id' =>$users])->count();
    $correct_ans_given = app\models\ExamintionUserRelation::find()->where(['result' => '1', 'exam_id' => $myexam->id, 'user_id' => $users])->count();
    $total_question = app\models\Paper::find()->where(['exam_id' => $myexam->id])->all();
    //var_dump($total_question);
    $total = 0;
    foreach ($total_question as $total_questions) {
        $total+=$total_questions->no_of_question;
    }
    $marks = $correct_ans_given * $myexam->marks_per_question;
    $nagitive = ($total_attemp - $correct_ans_given) * $myexam->nagitive_marks;
    $totalmark = $total * $myexam->marks_per_question;
    $getmark = $marks - $nagitive;
    ?>
    <table class="table table-striped table-bordered">

        <tr >
            <td  colspan="4"> 
                Exam: <b><?php echo ucwords($myexam->exam_title); ?></b><br/>
                <?php
                echo '<b>';
               // echo $finduser->username;
                echo '</b>';
                ?> </td>

            <td colspan="3" align="right">

                Mark Per Question: <b><?php echo $myexam->marks_per_question; ?> </b><br/>
                Negative Mark Per Question: <b><?php echo $myexam->nagitive_marks; ?> </b>

            </td></tr>
        <tr class="info"> 

            <td><b> Date</b></td>

            <td><b> Attempt Question</b></td>
            <td><b>Obtain Mark</b></td> 
            <td><b>Negative Marks</b></td>
            <td><b>Net Marks </b> </td>
            <td><b>Max Marks </b> </td>
        </tr>

        <tr class="warning">

            <td ><?php echo $myexam->start; ?></td>


            <td><?php echo $total_attemp . '<b>/</b>' . $total; ?>  </td>
            <td><?php echo $marks; ?></td>
            <td><b><?php echo $nagitive; ?></b></td>
            <td><?php echo $getmark; ?></td>
            <td><?= $totalmark ?>  </td>
        </tr>

    </table>
    <a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Back</a>
    
     <ul class="nav nav-pills">

        <?php
        if ($total_attemp > 0) {

            $findSubject = \app\models\ExamPaperRelation::find()->where(['exam_id' => $myexam->id])->groupBy('subject_id')->all();
            $n = 0;
            foreach ($findSubject as $subject) {
                //var_dump($subject);
                $main_subject = \app\models\Subject::find()->where(['id' => $subject->subject_id])->one();
                ?>
                <li <?php
                if ($n == 0) {
                    echo "class='active'";
                }
                ?>> <a data-toggle="pill" href="#<?php echo $subject->subject_id; ?>"><?php echo $main_subject->name; ?></a></li>
                    <?php
                    $n++;
                }
                ?>


        </ul>

        <div class="tab-content">
            <?php
            $b = 0;
            foreach ($findSubject as $subject) {
                //var_dump($subject);
                $main_subject = \app\models\Subject::find()->where(['id' => $subject->subject_id])->one();
                ?>
                <div id="<?php echo $subject->subject_id; ?>" class="tab-pane fade in <?php
                if ($b == 0) {
                    echo "active";
                }
                ?>">
                    <br/>
                    <?php
                    $find_question_acroding_to_subject = app\models\ExamPaperRelation::find()->where(['exam_id' => $myexam->id, 'subject_id' => $subject->subject_id])->all();
                    ?>
                    <?php
                    $count = 1;
                    foreach ($find_question_acroding_to_subject as $questions) {

                        $findquestion = \app\models\Question::find()->where(['id' => $questions->question_id])->one();
                        $connection = Yii::$app->getDb();
                        $command = $connection->createCommand("SELECT * FROM `examintion_user_relation` WHERE `user_id`=$users and `exam_id`=$myexam->id  and `question_id`=$questions->question_id");
                        $result = $command->queryAll();
                        $student_result=intval($result[0]['given_answar']);

                        // var_dump($findquestion);
                        ?>
                        <div class="col-sm-12 alert-info"><?php echo 'Q.' . $count . ' : ' . $findquestion->question_desc; ?></div>
                        <?php
                        if ($findquestion->question_option1 != '') {
                            $qq1 = 1;
                            ?>  <div class="col-sm-6
                            <?php
                            if ($qq1 == $student_result && $qq1 == $findquestion->correct_answar) {  echo ' alert-success ';  } 
                            if ($qq1 == $student_result) {  echo ' alert-warning ';}
                             if($qq1 == $findquestion->correct_answar) { echo ' alert-success';}
                            
                            ?>">1. <?php echo $findquestion->question_option1; ?></div> <?php } ?>
                        <?php
                        if ($findquestion->question_option2 != '') {
                            $qq2 = 2;
                            ?>  <div class="col-sm-6 <?php
                                 if ($qq2 == $student_result && $qq2 == $findquestion->correct_answar) {  echo ' alert-success ';    } 
                                 if ($qq2 == $student_result) {  echo ' alert-warning '; }
                                 if($qq2 == $findquestion->correct_answar) { echo ' alert-success';}
                                 
                                 ?>">2. <?php echo $findquestion->question_option2; ?></div> <?php } ?>
                        <?php
                             if ($findquestion->question_option3 != '') {
                                 $qq3 = 3;
                                 ?>  <div class="col-sm-6 <?php
                            if ($qq3 == $student_result && $qq3 == $findquestion->correct_answar) { echo ' alert-success '; } 
                            if ($qq3 == $student_result) { echo ' alert-warning ';}
                             if($qq3 == $findquestion->correct_answar) { echo ' alert-success';}
                           
                            ?>">3. <?php echo $findquestion->question_option3; ?></div> <?php } ?>
                             <?php
                        if ($findquestion->question_option4 != '') {
                            $qq4 = 4;
                            ?>  <div class="col-sm-6 
                                <?php
                            if ($qq4 == $student_result && $qq4 == $findquestion->correct_answar) {  echo ' alert-success '; } 
                            if ($qq4 == $student_result) { echo ' alert-warning '; }
                             if($qq4 == $findquestion->correct_answar) { echo ' alert-success';}
                            
                            ?>">4. <?php echo $findquestion->question_option4; ?></div> <?php } ?>
                             <?php
                             if ($findquestion->question_option5 != '') {
                                 $qq5 = 5;
                                 ?>  <div class="col-sm-6
                                        <?php
                                        if ($qq5 == $student_result && $qq5 == $findquestion->correct_answar) {
                                            echo ' alert-success ';
                                        }
                                        if ($qq5 == $student_result) {
                                            echo ' alert-warning';
                                        }
                                         if($qq5 == $findquestion->correct_answar) { echo ' alert-success';}
                                     
                                        ?>">4. <?php echo $findquestion->question_option5; ?></div> <?php } ?>
                        <div class="col-sm-12">
                            <div class="col-sm-3"><b>
            <?php
            // echo $findquestion->id;

            echo 'Your Ans : ' .$student_result;
            ?>  <?php
           // var_dump($student_result);
         //   var_dump($findquestion->correct_answar);
            
            if ($student_result ==  $findquestion->correct_answar) {
                echo ' <span class="glyphicon glyphicon-ok alert-success">Correct</span>';
            } else {
                echo '<span class="glyphicon glyphicon-remove alert-danger">Incorrect</span>';
            }
            ?></b></div>
                            <div class="col-sm-2"> </div>
                            <div class="col-sm-3"><?php echo '<b>Correct Answer is :</b> ' . $findquestion->correct_answar; ?></div>

                        </div>
                        <div class="clearfix"></div>
                        <hr>
            <?php
            $count++;
        }
        ?>
                </div>

        <?php
        $b++;
    }
}
?>

    </div>

    <?php

?>

</div>

<?php// } ?>