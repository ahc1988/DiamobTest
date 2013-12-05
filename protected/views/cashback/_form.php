<?php
/* @var $this CashbackController */
/* @var $model Cashback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cashback-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'APROBADO_EN'); ?>
		<?php echo $form->textField($model,'APROBADO_EN'); ?>
		<?php echo $form->error($model,'APROBADO_EN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SE_HIZO_EFECTIVO'); ?>
		<?php echo $form->textField($model,'SE_HIZO_EFECTIVO'); ?>
		<?php echo $form->error($model,'SE_HIZO_EFECTIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FK_TRACKING_TICJET'); ?>
		<?php echo $form->textField($model,'FK_TRACKING_TICJET'); ?>
		<?php echo $form->error($model,'FK_TRACKING_TICJET'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->