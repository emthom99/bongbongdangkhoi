<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->code,
);

$this->menu=array(
	array('label'=>'List File', 'url'=>array('index')),
	array('label'=>'Create File', 'url'=>array('create')),
	array('label'=>'Update File', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete File', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
?>

<h1>View File #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'filename',
		'extension',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
