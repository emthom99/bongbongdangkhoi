<?php
/* @var $this NeedToKnowController */
/* @var $model NeedToKnow */

$this->breadcrumbs=array(
	'Need To Knows'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NeedToKnow', 'url'=>array('index')),
	array('label'=>'Manage NeedToKnow', 'url'=>array('admin')),
);
?>

<h1>Create NeedToKnow</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>