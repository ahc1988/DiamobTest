<?php
/* @var $this ConsumidorController */
/* @var $model Consumidor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consumidor-form',
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
		<?php echo $form->labelEx($model,'APELLIDO'); ?>
		<?php echo $form->textField($model,'APELLIDO',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'APELLIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'E_MAIL'); ?>
		<?php echo $form->textField($model,'E_MAIL',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'E_MAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'USERNAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_DE_INSCRIPCION'); ?>
		<?php echo $form->textField($model,'FECHA_DE_INSCRIPCION'); ?>
		<?php echo $form->error($model,'FECHA_DE_INSCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIRECCION'); ?>
		<?php echo $form->textField($model,'DIRECCION',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CIUDAD'); ?>
		<?php echo $form->textField($model,'CIUDAD',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'CIUDAD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO_PROVINCIA'); ?>
		<?php echo $form->textField($model,'ESTADO_PROVINCIA',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'ESTADO_PROVINCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAIS'); ?>
		<?php echo $form->textField($model,'PAIS',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'PAIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'METODO_REEMBOLSO'); ?>
		<?php echo $form->textField($model,'METODO_REEMBOLSO',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'METODO_REEMBOLSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->textField($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->error($model,'FK_CONSUMIDOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_CASHBACK'); ?>
		<?php echo $form->textField($model,'FK_CASHBACK'); ?>
		<?php echo $form->error($model,'FK_CASHBACK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_SUSCRIPCION'); ?>
		<?php echo $form->textField($model,'FK_SUSCRIPCION'); ?>
		<?php echo $form->error($model,'FK_SUSCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_TRACKING_TICKET'); ?>
		<?php echo $form->textField($model,'FK_TRACKING_TICKET'); ?>
		<?php echo $form->error($model,'FK_TRACKING_TICKET'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->