
<div class="container" style="min-height: 550px">
<?php

?>
<br/><br/>
    <div class="btn-group btn-group-justified green">
        <a class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('subject/', TRUE) ?>">Subjects</a></a>
        <a class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('question/', TRUE) ?>">Question</a></a>
        <a  class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('batch/', TRUE) ?>">Batch</a></a>
    </div> 
    <div class="btn-group btn-group-justified red" >
        <a class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('exam/', TRUE) ?>"> Create New Exam</a>
        <a   class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('exam-user/', TRUE) ?>">Register user into exam </a>
        <a  class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('/exam-user/batch-registration', TRUE) ?>">Batch-Registration (for Exams)</a>
    </div> 
    <div class="btn-group btn-group-justified yello" >
        <a  class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('user-admin/', TRUE) ?>">User Management</a>
        <a   class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('exam-user/', TRUE) ?>">Register user into exam </a>
        <a  class="btn btn-primary" href="<?php echo \yii\helpers\Url::to('user-admin/exam-results', TRUE) ?>">Show Exams Results (All)</a>
    </div> 



        <style>
             .green a{background: green;padding: 35px;font-weight: bold;font-size: 16px }
           .red a{background: red;padding: 35px;font-weight: bold;font-size: 16px  }
            .yello a{background: #C09853;padding: 35px;font-weight: bold;font-size: 16px  }
        </style>
    </div>