<?php
/* @var $this OfertaController */
/* @var $model Oferta */
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
		<?php echo $form->label($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>2048)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CASHBACK_PORCENTAJE'); ?>
		<?php echo $form->textField($model,'CASHBACK_PORCENTAJE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CASHBACK_FIJO'); ?>
		<?php echo $form->textField($model,'CASHBACK_FIJO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMISION_PORCENTAJE'); ?>
		<?php echo $form->textField($model,'COMISION_PORCENTAJE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COMISION_FIJA'); ?>
		<?php echo $form->textField($model,'COMISION_FIJA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_INICIO'); ?>
		<?php echo $form->textField($model,'FECHA_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_FINAL'); ?>
		<?php echo $form->textField($model,'FECHA_FINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_EMPRESA'); ?>
		<?php echo $form->textField($model,'FK_EMPRESA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->