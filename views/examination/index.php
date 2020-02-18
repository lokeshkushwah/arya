
</div>

<?php

use yii\helpers\Html;
use yii\web\View;
use yii\db\Expression;

//use yii\widgets\LinkPager;

$request = Yii::$app->request;
$exam = $request->get('exam');
$this->title = $exam;
// echo $exam;
$examtrue = \app\models\Exam::find()->where(['exam_title' => $exam])->one();
$start = $examtrue->start;
$end = $examtrue->end;
$dteStart = new DateTime($start);
$dteEnd = new DateTime($end);
$dteDiff = $dteStart->diff($dteEnd);
$dteStart->diff($dteEnd);
$countdown = $dteDiff->format("%H:%I:%S");
$countdown;

//   echo $examtrue->id;
$exam_id = $examtrue->id;
$quesitons = \app\models\ExamPaperRelation::find()->where(['exam_id' => $examtrue->id])->orderBy('subject_id')->all();
$no_of_quesitons = \app\models\ExamPaperRelation::find()->where(['exam_id' => $examtrue->id])->count();
$total_step = ceil($no_of_quesitons / 1);
$user = Yii::$app->user->identity;
//echo $user->id;
//var_dump($user);
if ($dteEnd >= $dteStart) {
    //  echo 'big';
}
$old_date_timestamp = strtotime($end);
$new_date = date('M d, Y H:i:s', $old_date_timestamp);
?>



    <h1 class="danger"  style="color:white;padding: 10px;margin-top: -110px;background: #FE9221;text-align: center"> Exam :<b> <?php echo ucfirst($exam); ?></b></h1>

 

<?php
//echo "Current Date: ".date('Y-m-d H:i:s')."<Br/>Start Date: ".$start."<Br/>End Date: ".$end."<br/>";
$current = strtotime(date('Y-m-d H:i:s'));
//echo '<br/>start: '.$start."<br/>";
$starttime = strtotime($start);
//echo '<br/>';
$endtime = strtotime($end);
//echo '<br/>';
$user_reg_for_exam = app\models\ExamUser::find()->where(['exam' => $examtrue->id, 'user' => $user->id])->count();
if ($current >= $starttime && $current <= $endtime && $user_reg_for_exam > 0) {
//if ($current >= $starttime && $current <= $endtime ) {
    $this->registerJsFile('/js/examination.js', ['position' => $this::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);
    ?>

<div class="container" >
    <div class="col-md-4">
    <div class="countdown simple" <?php //echo $end;   ?> data-date="<?php echo $new_date; //'June 7, 2037 15:03:25';    ?> " style="background: red;color: white;font-size: 15px;padding: 15px;font-weight: 800"></div>
       <br/> </div>

    <div class="clearfix" id="user" value="<?php
    if (!empty($user)) {
        echo $user->id;
    }
    ?>" ></div>
    <div id="rootwizard">

        <div class="col-md-5 pull-right"  >  <div class="navbar">
                <div class="navbar-inner">
                    <div class="content">
                        
                            <?php ?>
                        <ul style="height:250px;overflow-y:  scroll;">
                            <h4>Question Palette</h4><hr>
                            <?php
                            for ($x = 1; $x <= $total_step; $x++) {
                                ?>
                                <li><a href="#tab<?php echo $x; ?>" data-toggle="tab"><?php if ($x<10) echo "0"; echo $x; ?> </a></li>
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
                  
                                            
                foreach ($countries as $country) {
                    ?>
                    <?php
                    $question = app\models\Question::find()->where(['id' => $country->question_id])->orderBy(['id' => RAND()])->one();
                     
                     
                    ?>



                    <div class="tab-pane" id="tab<?php echo $cc; ?>">
                        <form class="myform">
                            <input type="hidden" name="sq" id="sq_id" value="<?php echo $cc ?>"/>
                            <input type="hidden"  name="exam" value="<?php echo $exam; ?>" />
                            <input type="hidden" name="exam_id" id="exam_id" value="<?php echo $examtrue->id; ?>" />
                            <input type="hidden" name="question" id="question_id" value="<?php echo $question->id ?>" />
                            <input type="hidden" name="submitURL" id="submitURL" value="<?= \yii\helpers\Url::to(['/examination/save-user-answer'], true); ?>" />

                            <p > Q. <?php echo $cc . ' ' . $question->question_desc; ?></p>
                            <hr style="width: 50%;float: left">
                            <div class="clearfix"></div>
        <?php if (!empty($question->question_option1)) { ?>
                                <div class="radio">
                                    <label><input type="radio" name="op" value="1"> A. <?php echo $question->question_option1; ?></label>
                                </div>
                                <div class="clearfix"></div>

                            <?php } ?>

        <?php if (!empty($question->question_option2)) { ?>
                                <div class="radio">
                                    <label><input type="radio" name="op" value="2">B. <?php echo $question->question_option2; ?></label>
                                </div>
                                <div class="clearfix"></div>
        <?php } ?>
        <?php if (!empty($question->question_option3)) { ?>
                                <div class="radio ">
                                    <label><input type="radio" name="op" value="3">C. <?php echo $question->question_option3; ?></label>
                                </div>
                                <div class="clearfix"></div>
        <?php } ?>
        <?php if (!empty($question->question_option4)) { ?>
                                <div class="radio ">
                                    <label><input type="radio" name="op" value="4">D. <?php echo $question->question_option4; ?></label>
                                </div>
                                <div class="clearfix"></div>
        <?php } ?>
        <?php if (!empty($question->question_option5)) { ?>
                                <div class="radio ">
                                    <label><input type="radio" name="op" value="5">E. <?php echo $question->question_option5; ?></label>
                                </div>
                                <div class="clearfix"></div>
        <?php } ?>
                            <hr>
                            <!--    <button type="button" class="btn btn-success">Submit</button>-->
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <?php
                    
                 $cc++;
                }
                  
                ?>





                <ul class="pager wizard">
                    
                    <li class="previous"><a href="javascript:;">Previous</a></li>
                    
                    <li class="next"><a class="abcx" href="javascript:;">Next</a></li>
                    <li class="finish"><a href="javascript:;">Finish</a></li>
                </ul>
            </div>
        </div>
        
        
    </div>
    <div class="clearfix"></div>


    <?php // LinkPager::widget(['pagination' => $pagination])       ?>
    <div class="clearfix"></div>


    <?php
//var_dump($countdown);
//die();
//$this->registerCssFile(Yii::$app->request->hostInfo . '/online-exam/web/css/prettify.css');
  //  $js = "$('#rootwizard').bootstrapWizard();  ";
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
//$this->registerJsFile(Yii::$app->request->hostInfo . '/online-exam/web/js/custom.js', ['position' => \yii\web\View::POS_END]);
//$this->registerJsFile(Yii::$app->request->hostInfo . '/online-exam/web/js/prettify.js');
//$this->registerCssFile(Yii::$app->request->hostInfo . '/online-exam/web/myfck/prettify.css');
}else {
    ?>
  
    <a href="<?php echo \yii\helpers\Url::home() ?>" class="btn btn-default btn-success">Go Home</a>
    <?php
}
    


//************************************/////////////
//************************************/////////////
//************************************/////////////
//************************************/////////////


?>
</div>