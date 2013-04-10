<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'View News', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>Update News <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>