<?php
/* @var $this FileController */
/* @var $model File */

$this->breadcrumbs=array(
	'Files'=>array('admin'),
	'Tạo mới',
);

$this->menu=array(
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Tạo File</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>