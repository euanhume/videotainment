<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->UserID), array('view', 'id'=>$data->UserID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserName')); ?>:</b>
	<?php echo CHtml::encode($data->UserName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserPwdHash')); ?>:</b>
	<?php echo CHtml::encode($data->UserPwdHash); ?>
	<br />


</div>