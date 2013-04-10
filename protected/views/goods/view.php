<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
	array('label'=>'Update Goods', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete Goods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>View Goods #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'fake_code',
		'name',
		'price',
		'sale_off_price',
		'description',
		'image_url',
		'type',
		'is_promoted',
		'is_favorited',
		'is_highlight1',
		'is_highlight2',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
