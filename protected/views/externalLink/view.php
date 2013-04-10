<?php
/* @var $this ExternalLinkController */
/* @var $model ExternalLink */

$this->breadcrumbs=array(
	'External Links'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ExternalLink', 'url'=>array('index')),
	array('label'=>'Create ExternalLink', 'url'=>array('create')),
	array('label'=>'Update ExternalLink', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete ExternalLink', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalLink', 'url'=>array('admin')),
);
?>

<h1>View ExternalLink #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'title',
		'url',
		'image_url',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
