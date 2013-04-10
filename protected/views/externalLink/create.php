<?php
/* @var $this ExternalLinkController */
/* @var $model ExternalLink */

$this->breadcrumbs=array(
	'External Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalLink', 'url'=>array('index')),
	array('label'=>'Manage ExternalLink', 'url'=>array('admin')),
);
?>

<h1>Create ExternalLink</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>