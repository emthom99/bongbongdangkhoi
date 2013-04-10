<?php
/* @var $this GoodsController */
/* @var $model Goods */
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
		<?php echo $form->label($model,'fake_code'); ?>
		<?php echo $form->textField($model,'fake_code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_off_price'); ?>
		<?php echo $form->textField($model,'sale_off_price',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_url'); ?>
		<?php echo $form->textArea($model,'image_url',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_promoted'); ?>
		<?php echo $form->textField($model,'is_promoted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_favorited'); ?>
		<?php echo $form->textField($model,'is_favorited'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_highlight1'); ?>
		<?php echo $form->textField($model,'is_highlight1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_highlight2'); ?>
		<?php echo $form->textField($model,'is_highlight2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->