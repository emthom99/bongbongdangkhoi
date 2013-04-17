<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Sản phẩm'=>array('admin'),
	'Cập nhật',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create')),
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Cập nhật Sản phẩm <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>