<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Sản phẩm'=>array('admin'),
	'Tạo mới',
);

$this->menu=array(
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Tạo Sản phẩm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>