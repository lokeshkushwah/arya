<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

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
            'reason_id',
            'project_name',
            'possession',
            'built_area',
            'total_area',
            'area_id',
            'no_of_units',
            'location',
            'address',
            'lat_long_address',
            'short_desc',
            'long_desc:ntext',
            'extra_note',
            'city_id',
            'status_id',
            'type_id',
            'classification_id',
            'user_id',
            'img',
            'approved',
        ],
    ]) ?>

</div>
