<?php
/* @var $this ConsumidorController */
/* @var $model Consumidor */
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
		<?php echo $form->label($model,'NOMBRE'); ?>
		<?php echo $form->textField($model,'NOMBRE',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO'); ?>
		<?php echo $form->textField($model,'APELLIDO',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'E_MAIL'); ?>
		<?php echo $form->textField($model,'E_MAIL',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_DE_INSCRIPCION'); ?>
		<?php echo $form->textField($model,'FECHA_DE_INSCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DIRECCION'); ?>
		<?php echo $form->textField($model,'DIRECCION',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CIUDAD'); ?>
		<?php echo $form->textField($model,'CIUDAD',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO_PROVINCIA'); ?>
		<?php echo $form->textField($model,'ESTADO_PROVINCIA',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAIS'); ?>
		<?php echo $form->textField($model,'PAIS',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'METODO_REEMBOLSO'); ?>
		<?php echo $form->textField($model,'METODO_REEMBOLSO',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_CONSUMIDOR'); ?>
		<?php echo $form->textField($model,'FK_CONSUMIDOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_CASHBACK'); ?>
		<?php echo $form->textField($model,'FK_CASHBACK'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_SUSCRIPCION'); ?>
		<?php echo $form->textField($model,'FK_SUSCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_TRACKING_TICKET'); ?>
		<?php echo $form->textField($model,'FK_TRACKING_TICKET'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->