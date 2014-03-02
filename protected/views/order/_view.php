<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->OrderID), array('view', 'id'=>$data->OrderID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderDate')); ?>:</b>
	<?php echo CHtml::encode($data->OrderDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderStatus')); ?>:</b>
	<?php echo CHtml::encode($data->OrderStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderShippingDate')); ?>:</b>
	<?php echo CHtml::encode($data->OrderShippingDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->UserID); ?>
	<br />


</div>