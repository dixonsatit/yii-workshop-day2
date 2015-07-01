<?php

namespace app\controllers;
use app\models\Blog;
use yii\data\ActiveDataProvider;

class BlogQueryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = Blog::find()->all();
        $model  = Blog::find()->one();
        $findByPk = Blog::findOne(4);

        $where = Blog::find()
                  ->where('id=:id',[':id'=>5])
                  ->one();

        return $this->render('index',[
            'models'=> $models,
            'model' => $model,
            'findByPk'=>$findByPk,
            'where'=>$where
        ]);
    }

    public function actionBlogList(){
        //use yii\data\ActiveDataProvider;
        $models = Blog::find();
        $dataProvider = new ActiveDataProvider([
          'query'=>$models
        ]);
        //$dataProvider->getModels();
        return $this->render('blog-list',[
          'dataProvider'=>$dataProvider
        ]);
    }

    public function actionDetailView($id){
      $model = Blog::findOne($id);
      $model = ($model==null) ? [] : $model;
      return $this->render('detailview',[
        'model'=>$model
      ]);
    }

    public function actionListView(){
      $models = Blog::find();
      $dataProvider = new ActiveDataProvider([
        'query'=>$models
      ]);

      return $this->render('list-view',[
        'dataProvider'=>$dataProvider
      ]);
    }

    public function actionChartJs(){
      return $this->render('chart-js');
    }






}
