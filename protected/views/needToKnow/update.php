<?php
/* @var $this NeedToKnowController */
/* @var $model NeedToKnow */

$this->breadcrumbs=array(
	'Need To Knows'=>array('index'),
	$model->title=>array('view','id'=>$model->code),
	'Update',
);

$this->menu=array(
	array('label'=>'List NeedToKnow', 'url'=>array('index')),
	array('label'=>'Create NeedToKnow', 'url'=>array('create')),
	array('label'=>'View NeedToKnow', 'url'=>array('view', 'id'=>$model->code)),
	array('label'=>'Manage NeedToKnow', 'url'=>array('admin')),
);
?>

<h1>Update NeedToKnow <?php echo $model->code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>