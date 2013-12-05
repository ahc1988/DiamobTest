<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORA_GENERACION'); ?>
		<?php echo $form->textField($model,'HORA_GENERACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESULTADO'); ?>
		<?php echo $form->textField($model,'RESULTADO',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COOKIE'); ?>
		<?php echo $form->textField($model,'COOKIE',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO'); ?>
		<?php echo $form->textField($model,'MONTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->textField($model,'FK_CONSUMIDOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_OFERTA'); ?>
		<?php echo $form->textField($model,'FK_OFERTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_CASHBACK'); ?>
		<?php echo $form->textField($model,'FK_CASHBACK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->