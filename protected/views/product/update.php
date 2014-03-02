<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->ProductID=>array('view','id'=>$model->ProductID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'View Product', 'url'=>array('view', 'id'=>$model->ProductID)),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>Update Product <?php echo $model->ProductID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>