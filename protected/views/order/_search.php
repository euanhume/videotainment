<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'OrderID'); ?>
		<?php echo $form->textField($model,'OrderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderDate'); ?>
		<?php echo $form->textField($model,'OrderDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderStatus'); ?>
		<?php echo $form->textField($model,'OrderStatus',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderShippingDate'); ?>
		<?php echo $form->textField($model,'OrderShippingDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'UserID'); ?>
		<?php echo $form->textField($model,'UserID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->