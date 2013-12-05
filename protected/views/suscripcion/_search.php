<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */
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
		<?php echo $form->label($model,'TIPO'); ?>
		<?php echo $form->textField($model,'TIPO',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGEN'); ?>
		<?php echo $form->textField($model,'IMAGEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERIOCIDAD_ENVIO'); ?>
		<?php echo $form->textField($model,'PERIOCIDAD_ENVIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_BOLETIN'); ?>
		<?php echo $form->textField($model,'FK_BOLETIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->