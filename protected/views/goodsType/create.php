<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */

$this->breadcrumbs=array(
	'Loại sản phẩm'=>array('admin'),
	'Tạo mới',
);

$this->menu=array(
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Tạo Loại sản phẩm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>