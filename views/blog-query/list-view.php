<?php
use yii\widgets\ListView;
?>
 <!--
 <div class="list-group">
   <a href="#" class="list-group-item active">
     <h4 class="list-group-item-heading">List group item heading</h4>
     <p class="list-group-item-text">...</p>
   </a>
 </div> -->
 <?= ListView::widget([
   'options'=>['class'=>'list-group'],
   'itemOptions'=>['tag'=>'a'],
   'dataProvider'=>$dataProvider,
   'itemView'=>'_item-view'
 ]);
 ?>
