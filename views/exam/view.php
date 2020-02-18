<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Exam */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Exams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exam-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?php 
//    DetailView::widget([
//        'model' => $model,
//        'attributes' => [
//            'id',
//            'exam_title',
//            'start',
//            'end',
//        ],
//    ])
    ?>
    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <?php
               $id=$_REQUEST['id'];
                $exam = app\models\Exam::find()->where(['id' =>$id])->one();
                   $paper = app\models\Paper::find()->where(['exam_id' =>$id])->all();
                
                  
                  
              //  var_dump($paper);
            ?>
            <tr><th>ID</th><td><?php echo $exam->id; ?></td></tr>
            <tr><th>Exam Title</th><td><?php echo $exam->exam_title; ?></td></tr>
            <tr><th>Start</th><td><?php echo $exam->start; ?></td></tr>
            <tr><th>End</th><td><?php echo $exam->end; ?></td></tr>
            <?php
               foreach ($paper as $pap) {
                  // var_dump($pap);
                     $subject_id=$pap->subject_id;
                       $subject = app\models\Subject::find()->where(['id' =>$subject_id])->one();
                       ?> <tr><th> <b> <?php echo ucfirst($subject->name) ?> </b></th><td>No of Question :- <b><?php echo $pap->no_of_question; ?></b></td></tr>
                     <?php // echo $subject->name;
                   }
            ?>
            
            
        </tbody>
    </table>
</div>
