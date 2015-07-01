<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Blogs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Blog'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
              'contentOptions'=>['class'=>'text-center'],
              'options'=>['style'=>'width:100px;'],
              'attribute'=>'title',
              'header'=>'รหัส + ชื่อเรื่อง',
              'format'=>'html',
              'value' => function($model){
                return "<span style=\"color:red;\">".$model->id."</span>::".$model->title;
              }
            ],
            [
              'attribute'=>'created_at',
              'value'=>function($model){
                //return !empty($modal->created_at) ? 'ว่าง' : 'ไม่ว่าง' ;
                return !empty($model->created_at) ? date('d-m-',$model->created_at).
                (date('Y',$model->created_at)+543) : null;
              }
            ],
            //'detail',
            //'publish',
            'created_at:date',
            'updated_at:dateTime',
            // 'created_by',
            // 'updated_by',
            // 'tag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
