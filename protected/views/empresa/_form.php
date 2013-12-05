<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IMAGEN'); ?>
		<?php echo $form->textField($model,'IMAGEN',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'IMAGEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PREVIEW'); ?>
		<?php echo $form->textField($model,'PREVIEW',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'PREVIEW'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EXCLUSIONS'); ?>
		<?php echo $form->textField($model,'EXCLUSIONS',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'EXCLUSIONS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SPECIAL_TERMS'); ?>
		<?php echo $form->textField($model,'SPECIAL_TERMS',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'SPECIAL_TERMS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->