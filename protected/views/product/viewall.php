<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1>
    <?php if (isset($console)){ 
        echo $console;
    }?>
</h1>
<div id="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div id="row">
     <?php foreach($games as $game): ?>
         <div class="block">
             <a href='<?php echo 'view/'.$game['ProductID']; ?>'><img src="<?php echo $this->imageURL.$game['ProductImg'].'.jpg'; ?>" height="135px" width="117px" /></a>
             <br />
             <h5><a href='<?php echo 'view/'.$game['ProductID']; ?>'><?php echo $game['ProductName']; ?></a></h5>
             <h5>£<?php echo $game['ProductPrice']; ?></h5>
             <?php echo CHtml::button('View', array('submit' => array('product/view/'.$game['ProductID']))); ?>
             <?php echo CHtml::button('Order', array('submit' => array('order/create/'.$model->ProductID))); ?>
         </div>
     <?php endforeach; ?>
</div>