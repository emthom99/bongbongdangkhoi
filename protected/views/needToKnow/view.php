<?php
/* @var $this NeedToKnowController */
/* @var $model NeedToKnow */

$this->breadcrumbs=array(
	'Need To Knows'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List NeedToKnow', 'url'=>array('index')),
	array('label'=>'Create NeedToKnow', 'url'=>array('create')),
	array('label'=>'Update NeedToKnow', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete NeedToKnow', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NeedToKnow', 'url'=>array('admin')),
);
?>

<h1>View NeedToKnow #<?php echo $model->code; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'title',
		'content',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
