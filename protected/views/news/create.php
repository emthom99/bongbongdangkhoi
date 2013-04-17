<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Tin tức'=>array('admin'),
	'Tạo mới',
);

$this->menu=array(
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Tạo mới Tin tức</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>