<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\QuickExamSetting */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Quick Exam Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quick-exam-setting-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_of_question',
            'mark_per_question',
            'negative_mark_per_question',
            'time',
        ],
    ]) ?>

</div>
