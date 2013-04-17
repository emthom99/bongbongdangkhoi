<?php
/* @var $this NeedToKnowController */
/* @var $model NeedToKnow */

$this->breadcrumbs=array(
	'Thông tin cần biết'=>array('admin'),
	'Tạo mới',
);

$this->menu=array(
	array('label'=>'Quản lí', 'url'=>array('admin')),
);
?>

<h1>Tạo mới Thông tin cần biết</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>