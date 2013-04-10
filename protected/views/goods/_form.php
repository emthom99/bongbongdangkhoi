<?php
/* @var $this GoodsController */
/* @var $model Goods */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'goods-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fake_code'); ?>
		<?php echo $form->textField($model,'fake_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fake_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_off_price'); ?>
		<?php echo $form->textField($model,'sale_off_price',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sale_off_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_url'); ?>
		<?php echo $form->textArea($model,'image_url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_promoted'); ?>
		<?php echo $form->textField($model,'is_promoted'); ?>
		<?php echo $form->error($model,'is_promoted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_favorited'); ?>
		<?php echo $form->textField($model,'is_favorited'); ?>
		<?php echo $form->error($model,'is_favorited'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_highlight1'); ?>
		<?php echo $form->textField($model,'is_highlight1'); ?>
		<?php echo $form->error($model,'is_highlight1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_highlight2'); ?>
		<?php echo $form->textField($model,'is_highlight2'); ?>
		<?php echo $form->error($model,'is_highlight2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->