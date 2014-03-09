<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->ProductID,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->ProductID)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ProductID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product</h1>
<div id="product">
    <div class="product-des">
        <div class="product-img">
            <img src="<?php echo $this->imageURL.$model->ProductImg.'.jpg'; ?>" height="270px" width="234px" />
        </div>
        <div class="product-info">
            <h2><?php echo $model->ProductName.' ('.$console.')'; ?></h2>
            <p><?php echo $model->ProductDescription; ?></p>
            <h3>Price: £<?php echo $model->ProductPrice; ?></h3>
            <h3>PEGI Rating: <?php echo $model->ProductPegi; ?>+</h3>
            <?php echo CHtml::button('Order', array('submit' => array('order/create/'.$model->ProductID))); ?>

        </div>
    </div>
</div>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ProductID',
		'ProductName',
		'ProductEdition',
		'ProductImg',
		'ProductPegi',
		'ProductPrice',
		'ProductTypeID',
	),
));*/ ?>
