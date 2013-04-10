<?php
/* @var $this NeedToKnowController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Need To Knows',
);

$this->menu=array(
	array('label'=>'Create NeedToKnow', 'url'=>array('create')),
	array('label'=>'Manage NeedToKnow', 'url'=>array('admin')),
);
?>

<h1>Need To Knows</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
