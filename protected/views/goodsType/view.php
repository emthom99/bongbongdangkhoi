<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List GoodsType', 'url'=>array('index')),
	array('label'=>'Create GoodsType', 'url'=>array('create')),
	array('label'=>'Update GoodsType', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete GoodsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>View GoodsType #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'name',
		'father_code',
		'search_type',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
