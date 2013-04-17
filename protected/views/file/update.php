<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('admin'),
	'Cập nhật',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create')),
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Cập nhật File <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>