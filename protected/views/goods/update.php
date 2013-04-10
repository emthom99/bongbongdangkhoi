<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->name=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
	array('label'=>'View Goods', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>Update Goods <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>