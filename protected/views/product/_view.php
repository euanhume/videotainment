<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ProductID), array('view', 'id'=>$data->ProductID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductName')); ?>:</b>
	<?php echo CHtml::encode($data->ProductName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductEdition')); ?>:</b>
	<?php echo CHtml::encode($data->ProductEdition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductImg')); ?>:</b>
	<?php echo CHtml::encode($data->ProductImg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductPegi')); ?>:</b>
	<?php echo CHtml::encode($data->ProductPegi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductPrice')); ?>:</b>
	<?php echo CHtml::encode($data->ProductPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductTypeID')); ?>:</b>
	<?php echo CHtml::encode($data->ProductTypeID); ?>
	<br />


</div>