<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textArea(['maxlength' => true]) ?>

    <div class="row">
      <div class="col-md-6 col-xs-6 col-lg-12">
        <?= $form->field($model, 'publish')->checkbox() ?>
      </div>
      <div class="col-md-6 col-xs-6 col-lg-12">
        <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>
      </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
