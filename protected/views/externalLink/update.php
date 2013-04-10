<?php
/* @var $this ExternalLinkController */
/* @var $model ExternalLink */

$this->breadcrumbs=array(
	'External Links'=>array('index'),
	$model->title=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalLink', 'url'=>array('index')),
	array('label'=>'Create ExternalLink', 'url'=>array('create')),
	array('label'=>'View ExternalLink', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage ExternalLink', 'url'=>array('admin')),
);
?>

<h1>Update ExternalLink <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>