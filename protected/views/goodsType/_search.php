<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'father_code'); ?>
		<?php echo $form->textField($model,'father_code',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_type'); ?>
		<?php echo $form->textField($model,'search_type',array('size'=>60,'maxlength'=>250)); ?>
        </div>
    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Tìm kiếm'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- Wide-form -->