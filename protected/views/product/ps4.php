<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div id="row">
     <?php foreach($games as $game): ?>
         <div class="block">
             <img src="<?php echo Yii::app()->request->baseUrl.'/images/ps4/'.$game['ProductImg'].'.jpg'; ?>" height="135px" width="117px" />
             <br />
             <?php echo $game['ProductName']; ?>
             <br />
             <?php echo CHtml::link('View Product', array('product/view?productname='.urlencode($game['ProductName']))) ?>
             <br />
             <?php echo CHtml::link('Quick Buy', array('order/create/'.$game['ProductID'])) ?>
         </div>
     <?php endforeach; ?>
</div>