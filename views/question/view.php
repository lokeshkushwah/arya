<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Question */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
<?php
 $request = Yii::$app->request->get();
 //echo '<pre>';
 $id= $request['id'];
 $question=  app\models\Question::find()->where(['id'=>$id])->one();
$subject=  app\models\Subject::find()->where(['id'=>$question->subject_id])->one();

?>
    <?php /* echo  DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'subject_id',
            'question_desc:ntext',
            'question_option1',
            'question_option2',
            'question_option3',
            'question_option4',
            'question_option5',
            'correct_answar',
        ],
    ]) */ ?>
    <table id="w0" class="table table-striped table-bordered detail-view"><tbody><tr><th>ID</th><td>67</td></tr>
<tr><th>Subject </th><td><?php echo $subject->name; ?></td></tr>
<tr><th>Question Desc</th><td><?php echo $question->question_desc; ?></td></tr>
<tr><th>Question Option1</th><td><?php echo $question->question_option1; ?></td></tr>
<tr><th>Question Option2</th><td><?php echo $question->question_option2; ?></td></tr>
<tr><th>Question Option3</th><td><?php echo $question->question_option3; ?></td></tr>
<tr><th>Question Option4</th><td><?php echo $question->question_option4; ?></td></tr>
<tr><th>Question Option5</th><td><?php echo $question->question_option5; ?></td></tr>
<tr><th>Correct Answar</th><td><?php echo $question->correct_answar; ?></td></tr></tbody></table>

</div>
