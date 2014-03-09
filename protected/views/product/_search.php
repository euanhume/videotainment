<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/product/viewall/'),
	'method'=>'get',
)); ?>

<?php 
  $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
      'attribute'=>'ProductName',
        'model'=>$model['ProductName'],
        'sourceUrl'=>array('product/aclist'),
        'name'=>'search',
        'options'=>array(
          'minLength'=>'1',
        ),
        'htmlOptions'=>array(
          'size'=>45,
          'maxlength'=>45,
          'class'=>'center',
        ),
  )); ?>

      <?php echo CHtml::submitButton('Search', $htmlOptions = array('name' => '', 'class'=>'center')); ?>


<?php $this->endWidget(); ?>

</div><!-- search-form -->