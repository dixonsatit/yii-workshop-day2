<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'detail:text',
            'detail:html',
            'publish:boolean',
            'created_at:date',
            'updated_at:dateTime',
            'created_by',
            'updated_by',
            'tag',
            [
              'attribute'=>'created_date',
              'value'=>!empty($model->created_at) ? date('d-m-',$model->created_at).
              (date('Y',$model->created_at)+543) : null
            ],[
              'attribute'=>'publish',
              'value'=>empty($model->publish) ? 'ซ่อน':'แสดง'
            ],[
              'attribute'=>'title',
              //'label'=>'กำหนดเอง',
              'value'=> $model->id.'::'.$model->title
            ]
        ],
    ]) ?>

</div>
