<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'suscripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO'); ?>
		<?php echo $form->textField($model,'TIPO',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IMAGEN'); ?>
		<?php echo $form->textField($model,'IMAGEN'); ?>
		<?php echo $form->error($model,'IMAGEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERIOCIDAD_ENVIO'); ?>
		<?php echo $form->textField($model,'PERIOCIDAD_ENVIO'); ?>
		<?php echo $form->error($model,'PERIOCIDAD_ENVIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_BOLETIN'); ?>
		<?php echo $form->textField($model,'FK_BOLETIN'); ?>
		<?php echo $form->error($model,'FK_BOLETIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->