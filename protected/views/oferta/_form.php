<?php
/* @var $this OfertaController */
/* @var $model Oferta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oferta-form',
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
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CASHBACK_PORCENTAJE'); ?>
		<?php echo $form->textField($model,'CASHBACK_PORCENTAJE'); ?>
		<?php echo $form->error($model,'CASHBACK_PORCENTAJE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CASHBACK_FIJO'); ?>
		<?php echo $form->textField($model,'CASHBACK_FIJO'); ?>
		<?php echo $form->error($model,'CASHBACK_FIJO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMISION_PORCENTAJE'); ?>
		<?php echo $form->textField($model,'COMISION_PORCENTAJE'); ?>
		<?php echo $form->error($model,'COMISION_PORCENTAJE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMISION_FIJA'); ?>
		<?php echo $form->textField($model,'COMISION_FIJA'); ?>
		<?php echo $form->error($model,'COMISION_FIJA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_INICIO'); ?>
		<?php echo $form->textField($model,'FECHA_INICIO'); ?>
		<?php echo $form->error($model,'FECHA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_FINAL'); ?>
		<?php echo $form->textField($model,'FECHA_FINAL'); ?>
		<?php echo $form->error($model,'FECHA_FINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_EMPRESA'); ?>
		<?php echo $form->textField($model,'FK_EMPRESA'); ?>
		<?php echo $form->error($model,'FK_EMPRESA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->