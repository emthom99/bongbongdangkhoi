<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Tin tức'=>array('admin'),
	'Cập nhật',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create')),
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Cập nhật Tin tức <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>