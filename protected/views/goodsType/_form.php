<?php
/* @var $this GoodsTypeController */
/* @var $model GoodsType */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'father_code'); ?>
		<?php echo $form->dropDownList($model,'father_code',CHtml::listData($model->isNewRecord?GoodsType::model()->findAll():GoodsType::model()->findAll("code <> $model->code"),'code','name'));?>
		<?php echo $form->error($model,'father_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cập nhật'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->