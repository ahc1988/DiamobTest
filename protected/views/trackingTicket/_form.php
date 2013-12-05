<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tracking-ticket-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HORA_GENERACION'); ?>
		<?php echo $form->textField($model,'HORA_GENERACION'); ?>
		<?php echo $form->error($model,'HORA_GENERACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESULTADO'); ?>
		<?php echo $form->textField($model,'RESULTADO',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'RESULTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COOKIE'); ?>
		<?php echo $form->textField($model,'COOKIE',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'COOKIE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MONTO'); ?>
		<?php echo $form->textField($model,'MONTO'); ?>
		<?php echo $form->error($model,'MONTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->textField($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->error($model,'FK_CONSUMIDOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_OFERTA'); ?>
		<?php echo $form->textField($model,'FK_OFERTA'); ?>
		<?php echo $form->error($model,'FK_OFERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_CASHBACK'); ?>
		<?php echo $form->textField($model,'FK_CASHBACK'); ?>
		<?php echo $form->error($model,'FK_CASHBACK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->