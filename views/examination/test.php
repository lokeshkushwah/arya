<?php

use yii\web\View;

$request = Yii::$app->request;
$exam = $request->get('exam');
$this->title = $exam;
//echo '<pre>';
$connection = Yii::$app->db;
$query = $connection->createCommand("select * from `exam` where `exam_title`= '$exam' ")->queryOne();

$exam_id = $query['id'];
$total = app\models\ExamPaperRelation::find()->where("exam_id=$exam_id")->count();

$start = $query['start'];
$end = $query['end'];
$dteStart = new DateTime($start);
$dteEnd = new DateTime($end);
$dteDiff = $dteStart->diff($dteEnd);
$dteStart->diff($dteEnd);
$countdown = $dteDiff->format("%H:%I:%S");
//var_dump($query);
$old_date_timestamp = strtotime($end);
$new_date = date('M d, Y H:i:s', $old_date_timestamp);
$user = Yii::$app->user->identity;
$subjects = $connection->createCommand("select `subject_id` from `exan_paper_relation` where `exam_id`= '$exam_id' group by `subject_id` ")->queryAll();

$current = strtotime(date('Y-m-d H:i:s'));
//echo '<br/>start: '.$start."<br/>";
$starttime = strtotime($start);
//echo '<br/>';
$endtime = strtotime($end);
//echo '<br/>';
$user_reg_for_exam = app\models\ExamUser::find()->where(['exam' => $exam_id, 'user' => $user->id])->count();

if ($current <= $starttime) {
    echo '<h2>Exam will start on :' . $start . '</h2>';
    ?>
<a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Back</a>
<?php

}
if ($current >= $endtime) {
    echo '<h2>Exam date is over by : ' . $end . '<h2>';
    ?><a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Back</a>
<?php
}

if ($current >= $starttime && $current <= $endtime && $user_reg_for_exam > 0) {
    ?>
</div>
<div class="container" style="background:#D1F8CE;margin-top:-140px">
  <div class="col-md-12" style="background:#FE9221 ">
    <div class="col-md-8 " style="background: #FE9221;color: white;font-size: 24px;padding: 15px;font-weight: 800">Exam
      :<b> <?php echo ucwords($this->title = $exam); ?></b></div>
    <div class="col-md-4">
      <div class="countdown simple" <?php //echo $end;           ?>
        data-date="<?php echo $new_date; //'June 7, 2037 15:03:25';                    ?> "
        style="background: #FE9221;color: white;font-size: 18px;padding: 18px;font-weight: 800"></div>
    </div>
  </div>
  <div class="clearfix"></div>
  <p>&nbsp;</p>
  <ul class="nav nav-tabs">

    <?php
$n = 1;
    foreach ($subjects as $ss) {
        $subject_id = $ss['subject_id'];
        $subject = \app\models\Subject::find()->where(['id' => $ss['subject_id']])->one();
        ?>
    <li class="<?php
if ($n == 1) {
            echo 'active';
        }
        ?>"><a data-toggle="tab" href="#<?php echo str_replace(' ', '-', ucwords($subject->name)); ?>">

        <?php echo str_replace(' ', '-', ucwords($subject->name)); ?>
      </a></li>
    <?php
$n++;
        //echo $subject->name . '<br/>';
    }
    ?>
  </ul>

  <div class="tab-content">
    <?php
$n = 1;
    foreach ($subjects as $sst) {
        ?>

    <?php
$subject_id = $sst['subject_id'];
        $subject = \app\models\Subject::find()->where(['id' => $sst['subject_id']])->one();
        $totalquestion = app\models\ExamPaperRelation::find()->where(['subject_id' => $sst['subject_id'], 'exam_id' => $exam_id])->count();
        ?>


    <div id="<?php echo str_replace(' ', '-', ucwords($subject->name)); ?>" class="tab-pane fade in  <?php
if ($n == 1) {
            echo 'active';
        }
        ?>">
      <div id="<?php echo 'tab' . str_replace(' ', '-', ucwords($subject->name)); ?>">



        <div class="col-md-5 pull-right">
          <div class="navbar">
            <div class="navbar-inner">
              <div class="content">

                <?php ?>
                <ul style="height:267px;overflow-y:  scroll; background: whitesmoke;padding-left: 15px ">
                  <h4>Question Palette</h4>
                  <hr>
                  <?php
for ($x = 1; $x <= $totalquestion; $x++) {
            ?>
                  <li><a href="#<?php echo 'q' . str_replace(' ', '-', ucwords($subject->name)) . $x; ?>"
                      data-toggle="tab"><?php
if ($x < 10) {
                echo "0";
            }

            echo $x;
            ?> </a></li>
                  <?php
}
        ?>

                </ul>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6 pull-left">
          <div class="tab-content">
            <?php
// echo $subject->name . '<br/>';
        $n = 1;
        $exam_paper_rel = $connection->createCommand("select * from `exan_paper_relation` where `exam_id`= '$exam_id'  and `subject_id`=' $subject_id' order by  RAND() ")->queryAll();
        foreach ($exam_paper_rel as $ex) {
            ?>

            <?php
$question = \app\models\Question::find()->where(['id' => $ex['question_id']])->one();
            ?>

            <div class="tab-pane" id="<?php echo 'q' . str_replace(' ', '-', ucwords($subject->name)) . $n; ?>">
              <form class="myform">
                <input type="hidden" name="sq" id="sq_id" value="<?php echo $n ?>" />
                <input type="hidden" name="exam" value="<?php echo $exam; ?>" />
                <input type="hidden" name="exam_id" id="exam_id" value="<?php echo $exam_id; ?>" />
                <input type="hidden" name="question" id="question_id" value="<?php echo $question->id ?>" />
                <input type="hidden" name="submitURL" id="submitURL"
                  value="<?=\yii\helpers\Url::to(['/examination/save-user-answer'], true);?>" />

                <p> Q<?php echo $n . '. &nbsp;&nbsp;' . $question->question_desc; ?></p>
                <hr style="width: 50%;float: left">
                <div class="clearfix"></div>
                <?php if (!empty($question->question_option1)) {?>
                <div class="radio">
                  <label><input type="radio" name="op" value="1"> A. <?php echo $question->question_option1; ?></label>
                </div>
                <div class="clearfix"></div>

                <?php }?>

                <?php if (!empty($question->question_option2)) {?>
                <div class="radio">
                  <label><input type="radio" name="op" value="2">B. <?php echo $question->question_option2; ?></label>
                </div>
                <div class="clearfix"></div>
                <?php }?>
                <?php if (!empty($question->question_option3)) {?>
                <div class="radio ">
                  <label><input type="radio" name="op" value="3">C. <?php echo $question->question_option3; ?></label>
                </div>
                <div class="clearfix"></div>
                <?php }?>
                <?php if (!empty($question->question_option4)) {?>
                <div class="radio ">
                  <label><input type="radio" name="op" value="4">D. <?php echo $question->question_option4; ?></label>
                </div>
                <div class="clearfix"></div>
                <?php }?>
                <?php if (!empty($question->question_option5)) {?>
                <div class="radio ">
                  <label><input type="radio" name="op" value="5">E. <?php echo $question->question_option5; ?></label>
                </div>
                <div class="clearfix"></div>
                <?php }?>
                <hr>
                <!--    <button type="button" class="btn btn-success">Submit</button>-->
                <div class="clearfix"></div>

              </form>
              <div class="col-md-6">
                <button class="marked btn-success">Mark</button>
                <button class="canceled btn-danger" qn="<?php echo $n; ?>" qt="<?php echo $question->id; ?>">cancel
                </button><br />
              </div>

            </div>


            <?php
$n++;
            ?>

            <?php }
        ?>

            <div class="col-md-6 " style="margin-top:-20px ">
              <ul class="pager wizard " style="padding: 0">

                <li class="previous"><a href="javascript:">Previous</a></li>

                <li class="next"><a class="abcx" href="javascript:;">Next</a></li>
                <?php //<li class="finish"><a href="javascript:;">Finish</a></li>    ?>
              </ul>
            </div>
          </div>
        </div>



      </div>
    </div>

    <?php
}
    ?>

  </div>

  <?php
foreach ($subjects as $sst) {
        ?>

  <?php
$subject_id = $sst['subject_id'];
        $subject = \app\models\Subject::find()->where(['id' => $sst['subject_id']])->one();
        $subject_name = str_replace(' ', '-', ucwords($subject->name));
        $subject_name = '$("#tab' . $subject_name . '").bootstrapWizard({onTabClick: function(tab, navigation, index) { 	}}) ';
        $this->registerJs($subject_name);
    }
    ?>

  <?php
$this->registerJsFile('/js/examination2.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
    $js2 = '   $(function() {
       var endDate = "' . $end . '";
        $(".countdown.simple").countdown({ date: endDate });
});
';
    $css = " .countdown {color:red}.nav > li > a{margin-top:2px}";
    $this->registerCss($css);
// $this->registerJs($js);
    $this->registerJs($js2);
    $this->registerJsFile('/js/custom.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
    $this->registerJsFile('/js/custom2.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
    ?>


  <div class="clearfix">

  </div>
  <hr>
  <div class="container center-block text-center">
    <a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">View-Result</a>

  </div>
  <?php }

if ($user_reg_for_exam == 0) {
    echo '<h2>You are not register for this exam.</h2>';
    ?>
  <a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Back</a>
  <?php
}