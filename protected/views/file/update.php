<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('index'),
	$model->title=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List File', 'url'=>array('index')),
	array('label'=>'Create File', 'url'=>array('create')),
	array('label'=>'View File', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage File', 'url'=>array('admin')),
);
?>

<h1>Update File <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>