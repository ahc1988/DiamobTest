<?php
/* @var $this CashbackController */
/* @var $model Cashback */
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
		<?php echo $form->label($model,'APROBADO_EN'); ?>
		<?php echo $form->textField($model,'APROBADO_EN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SE_HIZO_EFECTIVO'); ?>
		<?php echo $form->textField($model,'SE_HIZO_EFECTIVO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FK_TRACKING_TICJET'); ?>
		<?php echo $form->textField($model,'FK_TRACKING_TICJET'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->