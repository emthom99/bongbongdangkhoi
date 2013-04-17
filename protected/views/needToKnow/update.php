<?php
/* @var $this NeedToKnowController */
/* @var $model NeedToKnow */

$this->breadcrumbs=array(
	'Thông tin cần biết'=>array('admin'),
	'Cập nhật',
);

$this->menu=array(
	array('label'=>'Tạo mới', 'url'=>array('create')),
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Cập nhật Thông tin cần biết <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>