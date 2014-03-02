<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('/product/view/'),
	'method'=>'get',
)); ?>

<?php 
  $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
      'attribute'=>'ProductName',
        'model'=>$model['ProductName'],
        'sourceUrl'=>array('product/aclist'),
        'name'=>'productname',
        'options'=>array(
          'minLength'=>'1',
        ),
        'htmlOptions'=>array(
          'size'=>45,
          'maxlength'=>45,
        ),
  )); ?>

      <?php echo CHtml::submitButton('Search', $htmlOptions = array('name' => '')); ?>


<?php $this->endWidget(); ?>

</div><!-- search-form -->