<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Goods Types'=>array('index'),
	$model->name=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List GoodsType', 'url'=>array('index')),
	array('label'=>'Create GoodsType', 'url'=>array('create')),
	array('label'=>'View GoodsType', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage GoodsType', 'url'=>array('admin')),
);
?>

<h1>Update GoodsType <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>