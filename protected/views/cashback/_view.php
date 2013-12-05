<?php
/* @var $this CashbackController */
/* @var $data Cashback */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APROBADO_EN')); ?>:</b>
	<?php echo CHtml::encode($data->APROBADO_EN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SE_HIZO_EFECTIVO')); ?>:</b>
	<?php echo CHtml::encode($data->SE_HIZO_EFECTIVO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_TRACKING_TICJET')); ?>:</b>
	<?php echo CHtml::encode($data->FK_TRACKING_TICJET); ?>
	<br />


</div>