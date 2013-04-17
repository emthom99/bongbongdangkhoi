<?php
/* @var $this FileController */
/* @var $model File */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'file-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extension'); ?>
		<?php echo $form->textField($model,'extension',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'extension'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo CHtml::activeFileField($model, 'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
        
        <?php if($model->isNewRecord==false) {?>
            <div class="row">
                 <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->url,"image",array("width"=>"200px")); ?>
            </div>
        <?php }?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cập nhật'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->